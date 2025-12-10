@extends('dashboard.layouts.main')

@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-xl p-6 mx-auto max-w-4xl">

    {{-- ======================== --}}
    {{-- TITLE --}}
    {{-- ======================== --}}
    <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-gray-100 border-b pb-3">
      Detail Konsultasi – {{ $konsultasi->kode_konsultasi }}
    </h2>

    {{-- ======================== --}}
    {{-- 1. DATA PASIEN --}}
    {{-- ======================== --}}
    <h3 class="text-xl font-semibold mb-3 text-gray-800 dark:text-gray-100">
      Data Pasien
    </h3>

    <div
      class="grid sm:grid-cols-2 gap-6 mb-8 p-5 rounded-xl bg-gray-100 dark:bg-slate-700
                text-gray-800 dark:text-gray-100 shadow-sm">
      <div class="space-y-2">
        <p><span class="font-semibold">Nama:</span> {{ $konsultasi->nama_pasien ?? '-' }}</p>
        <p><span class="font-semibold">Umur:</span> {{ $konsultasi->umur }}</p>
        <p><span class="font-semibold">Jenis Kelamin:</span> {{ ucfirst($konsultasi->jenis_kelamin) }}</p>
      </div>

      <div class="space-y-2">
        <p><span class="font-semibold">Tanggal Konsultasi:</span> {{ $konsultasi->tanggal }}</p>
        <p><span class="font-semibold">Kode Konsultasi:</span> {{ $konsultasi->kode_konsultasi }}</p>
      </div>
    </div>

    {{-- CATATAN --}}
    @if ($konsultasi->catatan)
      <div class="mb-8 p-4 bg-yellow-100 dark:bg-yellow-800 text-yellow-900 dark:text-yellow-200 rounded-xl shadow-sm">
        <h4 class="font-semibold mb-1">Catatan Khusus:</h4>
        <p>{{ $konsultasi->catatan }}</p>
      </div>
    @endif

    {{-- ======================== --}}
    {{-- 2. TABEL GEJALA + JAWABAN USER --}}
    {{-- ======================== --}}
    <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-100">
      Jawaban Pasien
    </h3>

    <div class="overflow-x-auto mb-10">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-200">
        <thead class="text-xs uppercase bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300">
          <tr>
            <th class="px-6 py-3">Kode</th>
            <th class="px-6 py-3">Gejala</th>
            <th class="px-6 py-3">Jawaban</th>
            <th class="px-6 py-3">CF User</th>
            <th class="px-6 py-3">Bobot Awal</th>
            <th class="px-6 py-3">CF Evidence</th>
            <th class="px-6 py-3">Threshold</th>
            <th class="px-6 py-3">Accept</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($gejalas as $g)
            <tr class="border-b border-gray-200 dark:border-slate-700">
              <td class="px-6 py-4 font-semibold">{{ $g->gejala->kode }}</td>
              <td class="px-6 py-4">{{ $g->gejala->nama_gejala }}</td>
              <td class="px-6 py-4">{{ $g->jawaban }}</td>

              {{-- CF USER --}}
              <td class="px-6 py-4 font-bold text-blue-700 dark:text-blue-300">
                {{ $g->cf_user }}
              </td>

              <td class="px-6 py-4">{{ $g->gejala->bobot_awal }}</td>

              {{-- CF EVIDENCE --}}
              <td class="px-6 py-4 font-bold text-green-700 dark:text-green-300">
                {{ $g->cf_evidence }}
              </td>

              {{-- Threshold --}}
              <td class="px-6 py-4 font-semibold text-purple-700 dark:text-purple-300">
                {{ $g->threshold }}
              </td>

              {{-- Accept Checkbox --}}
              <td class="px-6 py-4">
                <input type="checkbox" disabled @if ($g->accept) checked @endif
                  class="w-5 h-5 text-green-500 focus:ring-green-400 border-gray-300 rounded">
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    {{-- ======================== --}}
    {{-- 3. HASIL KONSULTASI --}}
    {{-- ======================== --}}
    <h3 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-100">
      Hasil Diagnosa
    </h3>

    @if ($hasil)
      <div
        class="p-5 bg-blue-100 dark:bg-slate-700 text-gray-800 dark:text-gray-100 
                  rounded-xl shadow-sm mb-8">
        <p class="mb-2"><span class="font-semibold">Penyakit:</span> {{ $hasil->penyakit->nama_penyakit }}</p>
        <p class="mb-2">
          <span class="font-semibold">CF Akhir:</span>
          <span class="font-bold text-blue-700 dark:text-blue-300">{{ $hasil->cf_akhir }}</span>
        </p>
        <p class="mt-3"><span class="font-semibold">Kesimpulan:</span> {{ $hasil->kesimpulan }}</p>
      </div>
    @else
      <p class="text-red-500 font-semibold">Hasil diagnosa belum dihitung.</p>
    @endif

    {{-- ======================== --}}
    {{-- 4. TOMBOL --}}
    {{-- ======================== --}}
    <div class="mt-10 flex gap-3">
      <a href="{{ route('konsultasi.index') }}"
        class="px-6 py-2.5 bg-gray-700 hover:bg-gray-800 text-white rounded-xl font-medium shadow">
        Kembali
      </a>
    </div>

  </div>
@endsection
