<?php

use App\Models\TingkatDepresi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TingkatDepresiController;



Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/kuisioner', [HomepageController::class, 'kuisioner'])->name('kuisioner');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::resource('/dashboard/gejala', GejalaController::class)->except('show');
Route::resource('/dashboard/depresi', TingkatDepresiController::class)->except('show');
Route::resource('jawaban', JawabanController::class)->except(['show', 'create', 'edit']);
Route::resource('/dashboard/gejala', FormController::class);


// Route::get('/login', function () {
//     return view('homepage.auth.login');
// });
