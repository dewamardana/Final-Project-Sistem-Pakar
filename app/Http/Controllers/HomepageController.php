<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Konsultasi;
use App\Models\UserResponse;
use Illuminate\Http\Request;
use App\Models\BobotPenilaian;
use App\Models\KonsultasiHasil;
use App\Models\KonsultasiGejala;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage.index', [
            'title' => 'Welcome | Homepage',
        ]);
    }

    public function kuisioner()
    {
        $gejalas = Gejala::with('KonsultasiGejala')->get(); // ambil gejala
        $bobot_penilaians = BobotPenilaian::all(); // ambil bobot penilaian (certainty term)

        return view('homepage.kuisioner', [
            'title' => 'Isi Kuisioner | Homepage',
            'gejalas' => $gejalas,
            'bobot_penilaians' => $bobot_penilaians,
        ]);
    }

    /**
     * Submit kuisioner
     */
    public function submitKuisioner(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'nullable|string|max:255',
            'umur' => 'required|integer|min:1',
            'jenis_kelamin' => 'required|string|max:10',
            'gejala' => 'required|array',
            'gejala.*' => 'required|string',
        ]);


        $konsultasi = Konsultasi::create([
            'kode_konsultasi' => 'K' . now()->format('YmdHis'),
            'tanggal' => now(),
            'nama_pasien' => $request->nama_pasien ?? null,
            'umur' => $request->umur ?? 0,
            'jenis_kelamin' => $request->jenis_kelamin ?? '-',
            'catatan' => $request->catatan ?? null,
        ]);


        foreach ($request->gejala as $gejalaId => $bobotId) {
            $gejala = Gejala::findOrFail($gejalaId);
            $bobot = BobotPenilaian::find($bobotId);

            $cfUser = $bobot->cf ?? 0;
            $certaintyTerm = $bobot->certainty_term ?? '-';
            $cfEvidence = $gejala->bobot_awal * $cfUser;

            KonsultasiGejala::create([
                'konsultasi_id' => $konsultasi->id,
                'gejala_id' => $gejala->id,
                'jawaban' => $certaintyTerm,
                'cf_user' => $cfUser,
                'cf_evidence' => $cfEvidence,
            ]);
        }

        $gejalaKonsultasi = $konsultasi->KonsultasiGejala;

        // Hitung kondisi rules
        $cfThreshold = 0.4;
        $jumlahUtama = 0;
        $jumlahLain = 0;
        $gejalaBerat = [];

        // Update threshold & accept pada setiap gejala yang sudah disimpan
        foreach ($gejalaKonsultasi as $kg) {
            $kg->threshold = $cfThreshold;
            $kg->accept = $kg->cf_user >= $cfThreshold ? true : false;
            $kg->save();
        }

        foreach ($gejalaKonsultasi as $kg) {
            if ($kg->gejala->kategori === 'utama' && $kg->cf_user >= $cfThreshold) $jumlahUtama++;
            if ($kg->gejala->kategori === 'lain' && $kg->cf_user >= $cfThreshold) $jumlahLain++;
            if (in_array($kg->gejala->kode, ['G011', 'G012']) && $kg->cf_user >= $cfThreshold) {
                $gejalaBerat[$kg->gejala->kode] = true;
            }
        }

        $aturans = Aturan::all();
        $statusAturan = [];

        foreach ($aturans as $aturan) {
            $cocok = true;

            if ($jumlahUtama < $aturan->min_gejala_utama) $cocok = false;
            if ($jumlahLain < $aturan->min_gejala_lain) $cocok = false;
            if ($aturan->wajib_g011 && empty($gejalaBerat['G011'])) $cocok = false;
            if ($aturan->wajib_g012 && empty($gejalaBerat['G012'])) $cocok = false;

            $statusAturan[$aturan->id] = $cocok;
        }

        // Ambil rule yang benar-benar cocok & paling spesifik
        $aturanTerpenuhi = $aturans
            ->filter(function ($aturan) use ($statusAturan) {
                return $statusAturan[$aturan->id] === true;
            })
            ->sortByDesc(function ($aturan) {
                return ($aturan->min_gejala_utama * 10) +
                    ($aturan->min_gejala_lain * 5) +
                    ($aturan->wajib_g011 ? 2 : 0) +
                    ($aturan->wajib_g012 ? 2 : 0);
            })
            ->first();


        if (!$aturanTerpenuhi) {
            $penyakit = Penyakit::where('nama_penyakit', 'Normal')->first();

            if (!$penyakit) {
                // Jika belum ada → generate kode hanya sekali

                // Ambil penyakit terakhir dengan prefix PN
                $last = Penyakit::where('kode', 'LIKE', 'PN%')
                    ->orderBy('kode', 'DESC')
                    ->first();

                if ($last) {
                    $lastNumber = intval(substr($last->kode, 2));
                    $newNumber = $lastNumber + 1;
                } else {
                    $newNumber = 1;
                }

                $kodeBaru = 'PN' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);

                // Buat penyakit normal pertama kali
                $penyakit = Penyakit::create([
                    'kode' => $kodeBaru,
                    'nama_penyakit' => 'Normal',
                    'user_id' => Auth::user()->id ?? 1,
                ]);
            }
            $cfAkhir = 0.90;
            $kesimpulan = "Tingkat keyakinan terhadap {$penyakit->nama_penyakit} adalah "
                . round($cfAkhir, 4)
                . " (" . round($cfAkhir * 100, 2) . "%).";
        } else {
            // ------------------ JIKA ADA ATURAN TERPENUHI ------------------
            $penyakit = $aturanTerpenuhi->penyakit;

            // *** AMBIL HANYA CF_EVIDENCE DARI GEJALA YANG ACCEPT = TRUE ***
            $cfList = $gejalaKonsultasi
                ->where('accept', 1)                  // hanya gejala yang lolos threshold
                ->pluck('cf_evidence')               // ambil cf_evidence
                ->filter(function ($cf) {
                    return $cf > 0;
                })
                ->values();

            if ($cfList->isEmpty()) {
                $cfAkhir = 0;
            } else {
                // mulai dari CF pertama
                $cfAkhir = $cfList[0];

                // gabungkan satu per satu: CFbaru = CFlama + CFg * (1 - CFlama)
                for ($i = 1; $i < count($cfList); $i++) {
                    $cfAkhir = $cfAkhir + ($cfList[$i] * (1 - $cfAkhir));
                }
            }

            $kesimpulan = "Tingkat keyakinan terhadap {$penyakit->nama_penyakit} adalah "
                . round($cfAkhir, 4)
                . " (" . round($cfAkhir * 100, 2) . "%).";
        }

        // Simpan hasil akhir ke tabel konsultasi_hasil
        $hasil = KonsultasiHasil::create([
            'konsultasi_id' => $konsultasi->id,
            'penyakit_id' => $penyakit->id,
            'cf_akhir' => $cfAkhir,
            'kesimpulan' => $kesimpulan,
        ]);

        // Redirect ke halaman hasil diagnosis
        return redirect()->route('hasil.konsultasi', $hasil->id);
    }

    public function hasilKonsultasi($id)
    {
        $hasil = KonsultasiHasil::with(['konsultasi', 'penyakit'])->findOrFail($id);

        return view('homepage.hasil_konsultasi', [
            'title' => 'Hasil Konsultasi',
            'hasil' => $hasil
        ]);
    }
}
