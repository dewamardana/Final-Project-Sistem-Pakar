<?php

namespace App\Http\Controllers;

use App\Models\JawabanMaster;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jawabans = JawabanMaster::all();
        $title = 'Manage Jawaban | Dashboard';

        return view('dashboard.jawaban.index', compact('jawabans', 'title'));
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
        $request->validate([
            'nama' => 'required|unique:jawaban_masters,nama'
        ]);

        JawabanMaster::create($request->only('nama'));

        return back()->with('success', 'Jawaban berhasil ditambahkan');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JawabanMaster $jawaban)
    {
        $request->validate([
            'nama' => 'required|unique:jawaban_masters,nama,' . $jawaban->id,
        ]);

        $jawaban->update($request->only('nama'));

        return back()->with('success', 'Jawaban berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JawabanMaster $jawaban)
    {
        $jawaban->delete();
        return back()->with('success', 'Jawaban berhasil dihapus');
    }
}
