<?php

namespace App\Http\Controllers;

use App\Models\TingkatDepresi;
use Illuminate\Http\Request;

class TingkatDepresiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $depresi = TingkatDepresi::all();
        return view('dashboard.depresi.index', [
            'title' => 'Tingkat Depresi | Dashboard',
            'depresi' => $depresi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.depresi.create', [
            'title' => 'Tambah Tingkat Depresi | Dashboard',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'kode' => 'required|unique:tingkat_depresis,kode',
            'depresi' => 'required|unique:tingkat_depresis,depresi',
        ]);

        TingkatDepresi::create($validate);

        return redirect()->route('depresi.index')->with('success', 'Tingkat Depresi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(TingkatDepresi $tingkatDepresi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TingkatDepresi $depresi)
    {
        return view('dashboard.depresi.edit', [
            'title' => 'Edit Tingkat Depresi | Dashboard',
            'depresi' => $depresi,
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TingkatDepresi $depresi)
    {
        $validated = $request->validate([
            'kode' => 'required|unique:tingkat_depresis,kode,' . $depresi->id,
            'depresi' => 'required|unique:tingkat_depresis,depresi,' . $depresi->id,
        ]);

        $depresi->update($validated);

        return redirect()->route('depresi.index')->with('success', 'Tingkat Depresi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TingkatDepresi $depresi)
    {
        $depresi->delete();
        return redirect()->route('depresi.index')->with('success', 'Tingkat Depresi berhasil dihapus');
    }
}
