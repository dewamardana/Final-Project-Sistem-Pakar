<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aturan = Aturan::with('penyakit')->orderBy('id', 'DESC')->get();
        return view('dashboard.aturan.index', [
            'title' => 'Rule Base | Dashboard',
            'aturan' => $aturan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penyakit = Penyakit::all();
        return view('dashboard.aturan.create', [
            'title' => 'Rule Base Create | Dashboard',
            'penyakit' => $penyakit,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:50|unique:aturans,kode',
            'penyakit_id' => 'required|exists:penyakits,id',
            'min_gejala_utama' => 'required|integer|min:0',
            'min_gejala_lain' => 'required|integer|min:0',
        ]);

        Aturan::create([
            'user_id' => Auth::id(),
            'kode' => $request->kode,
            'penyakit_id' => $request->penyakit_id,
            'min_gejala_utama' => $request->min_gejala_utama,
            'min_gejala_lain' => $request->min_gejala_lain,
            'wajib_g011' => $request->has('wajib_g011'),
            'wajib_g012' => $request->has('wajib_g012'),
        ]);

        return redirect()->route('aturan.index')->with('success', 'Aturan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aturan $aturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aturan $aturan)
    {
        $penyakit = Penyakit::all();
        return view('dashboard.aturan.edit', [
            'title' => 'Edit Rule Base | Dashboard',
            'aturan' => $aturan,
            'penyakit' => $penyakit,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aturan $aturan)
    {
        $request->validate([
            'kode' => 'required|string|max:50,' . $aturan->id,
            'penyakit_id' => 'required|exists:penyakits,id',
            'min_gejala_utama' => 'required|integer|min:0',
            'min_gejala_lain' => 'required|integer|min:0',
        ]);

        $aturan->update([
            'kode' => $request->kode,
            'penyakit_id' => $request->penyakit_id,
            'min_gejala_utama' => $request->min_gejala_utama,
            'min_gejala_lain' => $request->min_gejala_lain,
            'wajib_g011' => $request->has('wajib_g011'),
            'wajib_g012' => $request->has('wajib_g012'),
        ]);

        return redirect()->route('aturan.index')->with('success', 'Aturan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aturan $aturan)
    {
        $aturan->delete();
        return redirect()->route('aturan.index')->with('success', 'Aturan berhasil dihapus.');
    }
}
