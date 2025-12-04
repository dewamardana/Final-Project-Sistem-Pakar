<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyakit = Penyakit::all();
        return view('dashboard.penyakit.index', [
            'title' => 'Info Penyakit Depresi | Dashboard',
            'penyakit' => $penyakit,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.penyakit.create', [
            'title' => 'Tambah Kriteria Depresi | Dashboard',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:10|unique:penyakits,kode',
            'nama_penyakit' => 'required|string|max:255|unique:penyakits,nama_penyakit'
        ]);

        Penyakit::create([
            'kode' => $request->kode,
            'nama_penyakit' => $request->nama_penyakit,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('penyakit.index')->with('success', 'Penyakit berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penyakit $penyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penyakit $penyakit)
    {
        return view('dashboard.penyakit.edit', [
            'title' => 'Tambah Kriteria Depresi | Dashboard',
            'penyakit' => $penyakit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penyakit $penyakit)
    {
        $request->validate([
            'kode' => 'required|string|max:10|unique:penyakits,kode,' . $penyakit->id,
            'nama_penyakit' => 'required|string|max:255|unique:penyakits,nama_penyakit,' . $penyakit->id
        ]);

        $penyakit->update([
            'kode' => $request->kode,
            'nama_penyakit' => $request->nama_penyakit
        ]);

        return redirect()->route('penyakit.index')->with('success', 'Penyakit berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penyakit $penyakit)
    {
        try {
            $penyakit->delete();
            return redirect()->route('penyakit.index')->with('success', 'Penyakit berhasil dihapus.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('penyakit.index')->with('error', 'Penyakit tidak dapat dihapus karena masih digunakan pada data lain.');
        }
    }
}
