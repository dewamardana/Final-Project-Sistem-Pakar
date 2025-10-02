<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.index');
});


Route::get('/login', function () {
    return view('homepage.auth.login');
});

Route::get('/kuisioner', function () {
    return view('homepage.kuisioner');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/gejala', function () {
    return view('dashboard.gejala.index');
});

Route::get('/dashboard/gejala/create', function () {
    return view('dashboard.gejala.create');
});

Route::get('/dashboard/gejala/edit', function () {
    return view('dashboard.gejala.edit');
});

Route::get('/dashboard/gejala/show', function () {
    return view('dashboard.gejala.show');
});
