<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthContoller extends Controller
{
    public function login()
    {
        return view('homepage.auth.login', [
            'title' => 'Login Page'
        ]); // halaman login
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        // attempt login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // pastikan hanya admin
            if (Auth::user()->role !== 'admin') {
                Auth::logout();
                return back()->with('error', 'Akses ditolak! Anda bukan admin.');
            }

            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Email atau password salah!')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
