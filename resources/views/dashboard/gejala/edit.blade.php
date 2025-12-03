@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6 mx-auto max-w-2xl">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Edit Gejala</h2>

    <form action="{{ route('gejala.update', $gejala->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-4">
        <label for="kode" class="block text-gray-700 dark:text-gray-300">Kode Gejala</label>
        <input type="text" name="kode" id="kode" value="{{ old('kode', $gejala->kode) }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring
          @error('kode') border-red-500 @enderror">
        @error('kode')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="gejala" class="block text-gray-700 dark:text-gray-300">Nama Gejala</label>
        <input type="text" name="gejala" id="gejala" value="{{ old('gejala', $gejala->gejala) }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring
          @error('gejala') border-red-500 @enderror">
        @error('gejala')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">
        Update
      </button>
      <a href="{{ route('gejala.index') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Kembali
      </a>
    </form>
  </div>
@endsection
