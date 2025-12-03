@extends('dashboard.layouts.main')

@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6 mx-auto max-w-2xl">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">{{ $title }}</h2>

    <form action="{{ route('gejala.store') }}" method="POST" class="space-y-4">
      @csrf

      {{-- Kode --}}
      <div>
        <label for="kode" class="block text-gray-700 dark:text-gray-300 font-medium">Kode</label>
        <input type="text" name="kode" id="kode" value="{{ old('kode') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring">
        @error('kode')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Pertanyaan --}}
      <div>
        <label for="gejala" class="block text-gray-700 dark:text-gray-300 font-medium">Pertanyaan</label>
        <input type="text" name="gejala" id="gejala" value="{{ old('gejala') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring">
        @error('gejala')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Nilai Jawaban --}}
      <div>
        <h3 class="font-semibold mb-2 text-gray-800 dark:text-gray-100">Nilai Jawaban</h3>
        @foreach ($jawabans as $jawaban)
          <div class="flex items-center space-x-3 mb-2">
            <span class="w-40 font-medium text-gray-700 dark:text-gray-300">{{ $jawaban->nama }}</span>
            <input type="number" step="0.1" min="0" max="1" name="jawaban[{{ $jawaban->id }}]"
              value="{{ old('jawaban.' . $jawaban->id, 0) }}"
              class="w-28 px-3 py-2 border rounded-lg focus:outline-none focus:ring
            border-gray-300 dark:border-slate-600 dark:bg-slate-700 dark:text-white
            focus:ring-green-400">
          </div>
        @endforeach
        @error('jawaban')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Tombol --}}
      <div class="flex space-x-3 mt-4">
        <button type="submit"
          class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-xl text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
          Simpan
        </button>
        <a href="{{ route('gejala.index') }}"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Kembali
        </a>
      </div>
    </form>
  </div>
@endsection
