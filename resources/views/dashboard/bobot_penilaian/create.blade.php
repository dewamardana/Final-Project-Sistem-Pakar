@extends('dashboard.layouts.main')

@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6 mx-auto max-w-2xl">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Tambah Bobot Penilaian</h2>

    <form action="{{ route('bobot_penilaian.store') }}" method="POST">
      @csrf

      {{-- Certainty Term --}}
      <div class="mb-4">
        <label for="certainty_term" class="block text-gray-700 dark:text-gray-300">Certainty Term</label>
        <input type="text" name="certainty_term" id="certainty_term" value="{{ old('certainty_term') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring
          @error('certainty_term') border-red-500 @enderror">
        @error('certainty_term')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- CF --}}
      <div class="mb-4">
        <label for="cf" class="block text-gray-700 dark:text-gray-300">CF (Certainty Factor)</label>
        <input type="number" step="0.01" name="cf" id="cf" value="{{ old('cf') }}"
          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring
          @error('cf') border-red-500 @enderror">
        @error('cf')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Actions --}}
      <button type="submit"
        class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-xl text-sm px-5 py-2.5">
        Simpan
      </button>

      <a href="{{ route('bobot_penilaian.index') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5">
        Kembali
      </a>

    </form>
  </div>
@endsection
