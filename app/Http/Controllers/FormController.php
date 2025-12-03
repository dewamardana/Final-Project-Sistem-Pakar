<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use App\Models\JawabanMaster;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Daftar Form | Dashboard';
        $gejalas = Gejala::with('jawabans')->get();
        return view('dashboard.form.index', compact('title', 'gejalas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Pertanyaan";
        $jawabans = JawabanMaster::all(); // ambil semua jawaban master

        return view('dashboard.form.create', compact('title', 'jawabans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:gejalas,kode',
            'gejala' => 'required',
            'jawaban' => 'required|array' // pastikan ada nilai jawaban
        ]);

        // buat gejala baru
        $gejala = Gejala::create($request->only('kode', 'gejala'));

        // attach jawaban master ke pivot dengan nilai yang diinput
        foreach ($request->jawaban as $jawabanId => $nilai) {
            $gejala->jawabans()->attach($jawabanId, ['nilai' => $nilai]);
        }

        return redirect()->route('gejala.index')
            ->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gejala $gejala)
    {
        // Ambil semua jawaban master
        $jawabans = JawabanMaster::all()->map(function ($jawaban) use ($gejala) {
            $pivot = $gejala->jawabans()->where('jawaban_master_id', $jawaban->id)->first()?->pivot;
            $jawaban->nilai = $pivot->nilai ?? 0; // default 0 jika belum ada
            return $jawaban;
        });

        $title = "Edit Pertanyaan";

        return view('dashboard.form.edit', compact('gejala', 'jawabans', 'title'));
    }

    /**
     * Update pertanyaan dan nilai jawaban sekaligus
     */
    public function update(Request $request, Gejala $gejala)
    {
        $request->validate([
            'kode' => 'required|unique:gejalas,kode,' . $gejala->id,
            'gejala' => 'required',
            'jawaban.*' => 'nullable|numeric'
        ]);

        // Update tabel gejalas
        $gejala->update($request->only('kode', 'gejala'));

        // Update tabel pivot gejala_jawaban
        $jawabanData = [];
        foreach ($request->jawaban as $jawabanId => $nilai) {
            $jawabanData[$jawabanId] = ['nilai' => $nilai ?? 0];
        }
        $gejala->jawabans()->sync($jawabanData); // sync pivot

        return redirect()->route('gejala.index')
            ->with('success', 'Pertanyaan dan nilai jawaban berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gejala $gejala)
    {
        $gejala->delete();

        return back()->with('success', 'Pertanyaan berhasil dihapus');
    }
}
