<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Models\KonsultasiHasil;

class KonsultasiHasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsultasi = Konsultasi::with('hasil.penyakit')->orderBy('tanggal', 'desc')->get();

        return view('dashboard.konsultasi.index', [
            'title' => 'Hasil Konsultasi | Dashboard',
            'konsultasi' => $konsultasi,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Konsultasi $konsultasi)
    {
        $k = $konsultasi->load([
            'KonsultasiGejala.gejala',
            'hasil.penyakit'
        ]);

        return view('dashboard.konsultasi.show', [
            'title'      => 'Detail Konsultasi | Dashboard',
            'konsultasi' => $k,
            'gejalas'    => $k->KonsultasiGejala,
            'hasil'      => $k->hasil,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KonsultasiHasil $konsultasiHasil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KonsultasiHasil $konsultasiHasil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KonsultasiHasil $konsultasiHasil)
    {
        //
    }
}
