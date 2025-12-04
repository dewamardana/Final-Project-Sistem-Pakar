@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6 mx-auto max-w-2xl">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Tambah Gejala</h2>

    <form action="{{ route('gejala.store') }}" method="POST">
      @csrf

      <div class="mb-4">
        <label for="kode" class="block text-gray-700 dark:text-gray-300">Kode Gejala</label>
        <input type="text" name="kode" id="kode" value="{{ old('kode') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring
          @error('kode') border-red-500 @enderror">
        @error('kode')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="nama_gejala" class="block text-gray-700 dark:text-gray-300">Nama Gejala</label>
        <input type="text" name="nama_gejala" id="nama_gejala" value="{{ old('nama_gejala') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring
          @error('nama_gejala') border-red-500 @enderror">
        @error('nama_gejala')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="kategori" class="block text-gray-700 dark:text-gray-300">Kategori Gejala</label>
        <select name="kategori" id="kategori"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring
          @error('kategori') border-red-500 @enderror">
          <option value="">-- Pilih Kategori --</option>
          <option value="utama" {{ old('kategori') == 'utama' ? 'selected' : '' }}>Gejala Utama</option>
          <option value="lain" {{ old('kategori') == 'lain' ? 'selected' : '' }}>Gejala Lain</option>
          <option value="berat" {{ old('kategori') == 'berat' ? 'selected' : '' }}>Gejala Berat</option>
        </select>
        @error('kategori')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="bobot_awal" class="block text-gray-700 dark:text-gray-300">Bobot Awal</label>
        <input type="number" step="0.01" name="bobot_awal" id="bobot_awal" value="{{ old('bobot_awal') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring
          @error('bobot_awal') border-red-500 @enderror">
        @error('bobot_awal')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-xl text-sm px-5 py-2.5">
        Simpan
      </button>

      <a href="{{ route('gejala.index') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5">
        Kembali
      </a>
    </form>
  </div>
@endsection
