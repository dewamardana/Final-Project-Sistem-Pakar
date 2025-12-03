@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6 mx-auto max-w-2xl">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Tambah Tingkat Depresi</h2>
    <form action="{{ route('depresi.store') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Kode</label>
        <input type="text" name="kode" value="{{ old('kode') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring">
        @error('kode')
          <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
      </div>
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Nama Depresi</label>
        <input type="text" name="depresi" value="{{ old('depresi') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring">
        @error('depresi')
          <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit"
        class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        Simpan
      </button>

      <a href="{{ route('gejala.index') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Kembali
      </a>
    </form>
  </div>
@endsection
