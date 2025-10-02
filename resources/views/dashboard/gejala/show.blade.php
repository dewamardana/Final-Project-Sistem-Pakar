@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Detail Artikel</h2>

    <p class="text-gray-900 dark:text-gray-100">
      <strong>Judul:</strong> 5 Cara Mengurangi Stres
    </p>
    <p class="text-gray-900 dark:text-gray-100">
      <strong>Kategori:</strong> Artikel
    </p>

    <p class="mt-4 text-gray-900 dark:text-gray-100"><strong>Konten:</strong></p>
    <p class="text-gray-700 dark:text-gray-300 mt-2">
      Tips sederhana agar tetap tenang dalam kesibukan sehari-hari.
    </p>

    <div class="mt-6 flex space-x-3">
      <a href="" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
      <a href="" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">Kembali</a>
    </div>
  </div>
@endsection
