<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\UserResponse;
use Illuminate\Http\Request;

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
        // ambil gejala beserta jawaban pivot
        $gejalas = Gejala::with('jawabans')->get();

        return view('homepage.kuisioner', [
            'title' => 'Isi Kuisioner | Homepage',
            'gejalas' => $gejalas,
        ]);
    }

    public function submitKuisioner(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $gejalas = Gejala::with('jawabans')->get();
        $nama = $request->nama;

        foreach ($gejalas as $gejala) {
            $field = 'q' . $gejala->id;
            if ($request->has($field)) {
                // cari jawaban berdasarkan nilai
                $jawabanModel = $gejala->jawabans->firstWhere('pivot.nilai', $request->$field);

                UserResponse::create([
                    'nama' => $nama,
                    'gejala_id' => $gejala->id,
                    'jawaban' => $jawabanModel->nama ?? '',
                    'nilai' => $request->$field,
                ]);
            }
        }

        return redirect()->route('homepage.thankyou')
            ->with('success', 'Kuisioner berhasil dikirim!');
    }
}
