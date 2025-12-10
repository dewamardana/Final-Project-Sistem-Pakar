<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('dashboard.gejala.index', [
            'title' => 'Gejala | Dashboard',
            'gejala' => Gejala::orderBy('id')->get(),
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
        $user = Auth::user();
        $request->validate([
            'kode'        => 'required|unique:gejalas,kode',
            'nama_gejala' => 'required|unique:gejalas,nama_gejala',
            'kategori'    => 'required|in:utama,lain,berat',
            'bobot_awal'  => 'required|numeric'
        ]);

        Gejala::create([
            'kode'        => $request->kode,
            'nama_gejala' => $request->nama_gejala,
            'kategori'    => $request->kategori,
            'bobot_awal'  => $request->bobot_awal,
            'user_id'     => $user->id,
        ]);

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

    public function update(Request $request, Gejala $gejala)
    {
        $request->validate([
            'kode' => 'required|unique:gejalas,kode,' . $gejala->id,
            'nama_gejala' => 'required|unique:gejalas,nama_gejala' . $gejala->id,
            'kategori' => 'required|in:utama,lain,berat',
            'bobot_awal' => 'required|numeric'
        ]);

        $gejala->update([
            'kode' => $request->kode,
            'nama_gejala' => $request->nama_gejala,
            'kategori' => $request->kategori,
            'bobot_awal' => $request->bobot_awal,
        ]);

        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gejala $gejala)
    {
        // Cek apakah gejala masih digunakan di tabel lain
        $relasiDipakai = $gejala->konsultasiGejala()->exists();

        if ($relasiDipakai) {
            return redirect()->route('gejala.index')->with('error', 'Gejala tidak dapat dihapus karena masih digunakan pada data lain.');
        }

        // Hapus jika aman
        $gejala->delete();
        return redirect()->route('gejala.index')->with('success', 'Gejala berhasil dihapus');
    }
}
