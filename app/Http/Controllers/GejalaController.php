<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gejala = Gejala::all();
        return view('dashboard.gejala.index', [
            'title' => 'Gejala | Dashboard',
            'gejala' => $gejala,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gejala.create', [
            'title' => 'Tambah Gejala | Dashboard'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode'   => 'required|unique:gejalas,kode',
            'gejala' => 'required|unique:gejalas,gejala'
        ]);

        Gejala::create($request->all());

        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gejala $gejala)
    {
        return view('dashboard.gejala.edit', [
            'title' => 'Edit Gejala | Dashboard',
            'gejala' => $gejala
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gejala $gejala)
    {
        $validated = $request->validate([
            'kode'   => 'required|unique:gejalas,kode,' . $gejala->id,
            'gejala' => 'required|unique:gejalas,gejala,' . $gejala->id,
        ]);

        $gejala->update($validated);

        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gejala $gejala)
    {
        $gejala->delete();
        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil dihapus.');
    }
}
