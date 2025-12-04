<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BobotPenilaian;
use Illuminate\Support\Facades\Auth;

class BobotPenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bobot = BobotPenilaian::all();

        return view('dashboard.bobot_penilaian.index', [
            'title' => 'CF User | Dashboard',
            'bobot' => $bobot,
        ]);
    }
    public function create()
    {
        return view('dashboard.bobot_penilaian.create', [
            'title' => 'CF User Create| Dashboard',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'certainty_term' => 'required|string|max:50|unique:bobot_penilaians,certainty_term',
            'cf' => 'required|numeric',
        ]);

        BobotPenilaian::create([
            'certainty_term' => $validated['certainty_term'],
            'cf' => $validated['cf'],
            'user_id' => Auth::id(), // otomatis ambil user login
        ]);

        return redirect()->route('bobot_penilaian.index')
            ->with('success', 'Bobot Penilaian berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BobotPenilaian $bobotPenilaian)
    {
        //
    }

    public function edit(BobotPenilaian $bobot_penilaian)
    {
        return view('dashboard.bobot_penilaian.edit', [
            'title' => 'CF User Edit | Dashboard',
            'bobot' => $bobot_penilaian,
        ]);
    }

    public function update(Request $request, BobotPenilaian $bobot_penilaian)
    {
        $request->validate([
            'certainty_term' => 'required|string|max:50|unique:bobot_penilaians,certainty_term,' . $bobot_penilaian->id,
            'cf' => 'required|numeric'
        ]);

        $bobot_penilaian->update([
            'certainty_term' => $request->certainty_term,
            'cf' => $request->cf
        ]);

        return redirect()->route('bobot_penilaian.index')->with('success', 'Bobot penilaian berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BobotPenilaian $bobotPenilaian)
    {
        $bobotPenilaian->delete();
        return redirect()->route('bobot_penilaian.index')->with('success', 'Bobot penilaian berhasil dihapus.');
    }
}
