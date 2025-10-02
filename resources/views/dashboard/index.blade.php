@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-8">
    <!-- Welcome Section -->
    <div class="text-center mb-10">
      <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">
        Selamat Datang di <span class="text-amber-500">Dashboard</span>
      </h1>
      <p class="text-gray-600 dark:text-gray-300">
        Kelola data artikel, gejala, depresi, dan hasil dengan mudah melalui panel ini.
      </p>
    </div>

    <!-- Statistik Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
      <div class="p-6 bg-gray-50 dark:bg-slate-700 rounded-xl shadow hover:shadow-lg transition">
        <div class="flex items-center space-x-4">
          <div class="p-3 bg-amber-100 rounded-lg">
            <svg class="w-8 h-8 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 11H5m14 0a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Total Artikel</h3>
            <p class="text-2xl font-bold text-amber-600">12</p>
          </div>
        </div>
      </div>

      <div class="p-6 bg-gray-50 dark:bg-slate-700 rounded-xl shadow hover:shadow-lg transition">
        <div class="flex items-center space-x-4">
          <div class="p-3 bg-green-100 rounded-lg">
            <svg class="w-8 h-8 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 17v-2h6v2a2 2 0 01-2 2h-2a2 2 0 01-2-2zM12 3v12" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Total Gejala</h3>
            <p class="text-2xl font-bold text-green-600">25</p>
          </div>
        </div>
      </div>

      <div class="p-6 bg-gray-50 dark:bg-slate-700 rounded-xl shadow hover:shadow-lg transition">
        <div class="flex items-center space-x-4">
          <div class="p-3 bg-blue-100 rounded-lg">
            <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Total Hasil Tes</h3>
            <p class="text-2xl font-bold text-blue-600">7</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Links -->
    <div>
      <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">Akses Cepat</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="/dashboard/artikel"
          class="p-6 bg-amber-500 hover:bg-amber-600 text-white rounded-xl shadow-lg flex items-center justify-center font-semibold transition">
          Kelola Artikel
        </a>
        <a href="/dashboard/gejala"
          class="p-6 bg-green-500 hover:bg-green-600 text-white rounded-xl shadow-lg flex items-center justify-center font-semibold transition">
          Kelola Gejala
        </a>
        <a href="/dashboard/hasil"
          class="p-6 bg-blue-500 hover:bg-blue-600 text-white rounded-xl shadow-lg flex items-center justify-center font-semibold transition">
          Lihat Hasil Tes
        </a>
      </div>
    </div>
  </div>
@endsection
