<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\AturanController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BobotPenilaianController;
use App\Http\Controllers\KonsultasiHasilController;




Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/kuisioner', [HomepageController::class, 'kuisioner'])->name('kuisioner');
Route::post('/kuisioner/submit', [HomepageController::class, 'submitKuisioner'])->name('kuisioner.submit');
Route::get('/hasil-konsultasi/{id}', [HomepageController::class, 'hasilKonsultasi'])->name('hasil.konsultasi');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/dashboard/bobot_penilaian', BobotPenilaianController::class);
    Route::resource('/dashboard/gejala', GejalaController::class);
    Route::resource('/dashboard/penyakit', PenyakitController::class);
    Route::resource('/dashboard/aturan', AturanController::class);
    Route::get('/dashboard/konsultasi', [KonsultasiHasilController::class, 'index'])->name('konsultasi.index');
    Route::get('/konsultasi/{konsultasiHasil}', [KonsultasiHasilController::class, 'show'])->name('konsultasi.show');
});


Route::get('/login', [AuthContoller::class, 'login'])->name('login.index');
Route::post('/login', [AuthContoller::class, 'store'])->name('login.store');
Route::post('/logout', [AuthContoller::class, 'logout'])->name('logout');
