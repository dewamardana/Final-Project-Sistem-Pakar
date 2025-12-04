@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6 mx-auto max-w-2xl">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Edit Gejala</h2>

    <form action="{{ route('gejala.update', $gejala->id) }}" method="POST">
      @csrf
      @method('PUT')

      {{-- Kode Gejala --}}
      <div class="mb-4">
        <label for="kode" class="block text-gray-700 dark:text-gray-300">Kode Gejala</label>
        <input type="text" name="kode" id="kode" value="{{ old('kode', $gejala->kode) }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring @error('kode') border-red-500 @enderror">
        @error('kode')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Nama Gejala --}}
      <div class="mb-4">
        <label for="nama_gejala" class="block text-gray-700 dark:text-gray-300">Nama Gejala</label>
        <input type="text" name="nama_gejala" id="nama_gejala" value="{{ old('nama_gejala', $gejala->nama_gejala) }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring @error('nama_gejala') border-red-500 @enderror">
        @error('nama_gejala')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Kategori --}}
      <div class="mb-4">
        <label for="kategori" class="block text-gray-700 dark:text-gray-300">Kategori</label>
        <select name="kategori" id="kategori"
          class="w-full px-4 py-2 border rounded-lg capitalize @error('kategori') border-red-500 @enderror">
          <option value="utama" {{ old('kategori', $gejala->kategori) == 'utama' ? 'selected' : '' }}>Utama</option>
          <option value="lain" {{ old('kategori', $gejala->kategori) == 'lain' ? 'selected' : '' }}>Lain</option>
          <option value="berat" {{ old('kategori', $gejala->kategori) == 'berat' ? 'selected' : '' }}>Berat</option>
        </select>
        @error('kategori')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Bobot Awal --}}
      <div class="mb-4">
        <label for="bobot_awal" class="block text-gray-700 dark:text-gray-300">Bobot Awal</label>
        <input type="number" step="0.01" name="bobot_awal" id="bobot_awal"
          value="{{ old('bobot_awal', $gejala->bobot_awal) }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring @error('bobot_awal') border-red-500 @enderror">
        @error('bobot_awal')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2">
        Update
      </button>

      <a href="{{ route('gejala.index') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2">
        Kembali
      </a>
    </form>
  </div>
@endsection
