@extends('dashboard.layouts.main')

@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6 mx-auto max-w-2xl">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Tambah Penyakit</h2>

    <form action="{{ route('penyakit.store') }}" method="POST">
      @csrf

      {{-- Kode Penyakit --}}
      <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300">Kode Penyakit</label>
        <input type="text" name="kode" value="{{ old('kode') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring @error('kode') border-red-500 @enderror">
        @error('kode')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300">Nama Penyakit</label>
        <input type="text" name="nama_penyakit" value="{{ old('nama_penyakit') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring @error('nama_penyakit') border-red-500 @enderror">
        @error('nama_penyakit')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-xl text-sm px-5 py-2.5">
        Simpan
      </button>

      <a href="{{ route('penyakit.index') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5">
        Kembali
      </a>
    </form>
  </div>
@endsection
