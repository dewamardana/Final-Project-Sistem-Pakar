@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6 max-w-2xl mx-auto">

    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Tambah Aturan</h2>

    <form action="{{ route('aturan.store') }}" method="POST">
      @csrf

      {{-- Kode --}}
      <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300 mb-1">Kode Aturan</label>
        <input type="text" name="kode" value="{{ old('kode') }}"
          class="w-full px-4 py-2 border rounded-lg focus:ring @error('kode') border-red-500 @enderror">
        @error('kode')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Penyakit --}}
      <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300 mb-1">Penyakit</label>
        <select name="penyakit_id"
          class="w-full px-4 py-2 border rounded-lg focus:ring @error('penyakit_id') border-red-500 @enderror">
          <option value="">-- Pilih Penyakit --</option>
          @foreach ($penyakit as $p)
            <option value="{{ $p->id }}" {{ old('penyakit_id') == $p->id ? 'selected' : '' }}>
              {{ $p->nama_penyakit }}
            </option>
          @endforeach
        </select>
        @error('penyakit_id')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Min Gejala Utama --}}
      <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300 mb-1">Minimal Gejala Utama</label>
        <input type="number" name="min_gejala_utama" value="{{ old('min_gejala_utama') }}"
          class="w-full px-4 py-2 border rounded-lg focus:ring @error('min_gejala_utama') border-red-500 @enderror">
        @error('min_gejala_utama')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Min Gejala Lain --}}
      <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300 mb-1">Minimal Gejala Lain</label>
        <input type="number" name="min_gejala_lain" value="{{ old('min_gejala_lain') }}"
          class="w-full px-4 py-2 border rounded-lg focus:ring @error('min_gejala_lain') border-red-500 @enderror">
        @error('min_gejala_lain')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Wajib G011 --}}
      <div class="mb-2 flex items-center space-x-2">
        <input type="checkbox" name="wajib_g011" id="g011" {{ old('wajib_g011') ? 'checked' : '' }}>
        <label for="g011" class="text-gray-700 dark:text-gray-300">Wajib G011</label>
      </div>

      {{-- Wajib G012 --}}
      <div class="mb-4 flex items-center space-x-2">
        <input type="checkbox" name="wajib_g012" id="g012" {{ old('wajib_g012') ? 'checked' : '' }}>
        <label for="g012" class="text-gray-700 dark:text-gray-300">Wajib G012</label>
      </div>

      <button type="submit" class="text-white bg-green-700 hover:bg-green-800 rounded-xl text-sm px-5 py-2.5">
        Simpan
      </button>
      <a href="{{ route('aturan.index') }}"
        class="text-white bg-gray-600 hover:bg-gray-700 rounded-xl text-sm px-5 py-2.5">
        Kembali
      </a>
    </form>
  </div>
@endsection
