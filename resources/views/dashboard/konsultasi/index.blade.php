@extends('dashboard.layouts.main')

@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6">

    {{-- ALERT COMPONENT --}}
    @if (session('success'))
      <div id="alert-success" class="flex sm:items-center p-4 mb-4 text-sm text-green-800 bg-green-100 rounded-lg">
        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <div class="ms-2 text-sm">
          {{ session('success') }}
        </div>
        <button data-dismiss-target="#alert-success" class="ms-auto p-1.5 rounded hover:bg-green-200">
          ✕
        </button>
      </div>
    @endif

    {{-- TITLE --}}
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">
      Hasil Konsultasi Pasien
    </h2>

    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-200">
        <thead class="text-xs uppercase bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300">
          <tr>
            <th class="px-6 py-3">No</th>
            <th class="px-6 py-3">Kode</th>
            <th class="px-6 py-3">Nama Pasien</th>
            <th class="px-6 py-3">Umur</th>
            <th class="px-6 py-3">JK</th>
            <th class="px-6 py-3">Tanggal</th>
            <th class="px-6 py-3">CF Akhir</th>
            <th class="px-6 py-3">Kesimpulan</th>
            <th class="px-6 py-3">Aksi</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($konsultasi as $i => $k)
            <tr class="border-b border-gray-200 dark:border-slate-700">
              <td class="px-6 py-4">{{ $i + 1 }}</td>
              <td class="px-6 py-4 font-semibold">{{ $k->kode_konsultasi }}</td>
              <td class="px-6 py-4">{{ $k->nama_pasien }}</td>
              <td class="px-6 py-4">{{ $k->umur }}</td>
              <td class="px-6 py-4">{{ ucfirst($k->jenis_kelamin) }}</td>
              <td class="px-6 py-4">{{ $k->tanggal }}</td>

              {{-- CF Akhir --}}
              <td class="px-6 py-4 font-bold text-blue-700 dark:text-blue-300">
                {{ $k->hasil->cf_akhir ?? '-' }}
              </td>

              {{-- Kesimpulan --}}
              <td class="px-6 py-4">
                {{ $k->hasil->kesimpulan ?? 'Belum dihitung' }}
              </td>

              <td class="px-6 py-4">
                <a href="{{ route('konsultasi.show', $k->id) }}"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                  font-medium rounded-xl text-sm px-4 py-2">
                  Detail
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>

      </table>
    </div>

  </div>
@endsection
