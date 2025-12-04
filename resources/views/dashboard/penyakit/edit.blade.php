@extends('dashboard.layouts.main')

@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6 mx-auto max-w-2xl">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Edit Penyakit</h2>

    <form action="{{ route('penyakit.update', $penyakit->id) }}" method="POST">
      @csrf
      @method('PUT')

      {{-- Kode Penyakit --}}
      <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300">Kode Penyakit</label>
        <input type="text" name="kode" value="{{ old('kode', $penyakit->kode) }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring @error('kode') border-red-500 @enderror">
        @error('kode')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300">Nama Penyakit</label>
        <input type="text" name="nama_penyakit" value="{{ old('nama_penyakit', $penyakit->nama_penyakit) }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring @error('nama_penyakit') border-red-500 @enderror">
        @error('nama_penyakit')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-xl text-sm px-5 py-2.5">
        Update
      </button>

      <a href="{{ route('penyakit.index') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5">
        Kembali
      </a>
    </form>
  </div>
@endsection
