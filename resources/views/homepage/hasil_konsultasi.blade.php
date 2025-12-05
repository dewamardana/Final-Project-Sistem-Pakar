@extends('homepage.layout.main')

@section('content')
  <section class="py-20 bg-gray-50 dark:bg-slate-900 min-h-screen transition-colors">
    <div class="max-w-3xl mx-auto px-6">

      <!-- Title -->
      <h2 class="text-4xl font-bold text-center mb-10 flex justify-center items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-amber-500" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        Hasil Pemeriksaan Depresi
      </h2>

      <!-- Card -->
      <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 transition">

        <!-- Header -->
        <div class="mb-6">
          <h3 class="text-2xl font-semibold mb-2">👤 Data Pasien</h3>
          <div class="space-y-1 text-gray-700 dark:text-slate-300">
            <p><span class="font-semibold">Nama:</span> {{ $hasil->konsultasi->nama_pasien }}</p>
            <p><span class="font-semibold">Umur:</span> {{ $hasil->konsultasi->umur }} tahun</p>
            <p><span class="font-semibold">Jenis Kelamin:</span> {{ $hasil->konsultasi->jenis_kelamin }}</p>
          </div>
        </div>

        <hr class="border-gray-300 dark:border-slate-700 my-6">

        <!-- Result -->
        <div>
          <h3 class="text-2xl font-semibold mb-3">📌 Kesimpulan</h3>

          @if ($hasil->kesimpulan === 'Normal')
            <div class="p-5 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 rounded-xl">
              <p class="text-2xl font-bold text-green-600 dark:text-green-400">
                Kondisi Normal
              </p>
              <p class="mt-2 text-gray-700 dark:text-slate-300">
                Tidak ditemukan indikasi gangguan depresi.
              </p>
            </div>
          @else
            <div class="p-5 bg-red-50 dark:bg-red-900/30 border border-red-200 dark:border-red-800 rounded-xl">
              <p class="text-2xl font-bold text-red-600 dark:text-red-400">
                {{ $hasil->kesimpulan }}
              </p>
              <p class="mt-2 text-gray-700 dark:text-slate-300">
                Tingkat Kepastian:
                <strong class="text-lg">{{ round($hasil->cf_akhir * 100, 2) }}%</strong>
              </p>
            </div>
          @endif
        </div>

        <div class="text-center mt-10">
          <a href="{{ route('homepage') }}"
            class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-lg font-semibold transition shadow-md">
            Kembali ke Beranda
          </a>
        </div>

      </div>
    </div>
  </section>
@endsection
