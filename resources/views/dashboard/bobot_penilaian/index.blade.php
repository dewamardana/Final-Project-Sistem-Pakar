@extends('dashboard.layouts.main')

@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6">

    {{-- Alert Component --}}
    @if (session('success'))
      <div id="alert-success" class="flex sm:items-center p-4 mb-4 text-sm text-green-800 bg-green-100 rounded-lg"
        role="alert">
        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <span class="ms-2">{{ session('success') }}</span>
        <button type="button"
          class="ms-auto rounded p-1.5 hover:bg-green-200 focus:ring-2 focus:ring-green-300 h-8 w-8 flex items-center justify-center"
          data-dismiss-target="#alert-success">
          ✕
        </button>
      </div>
    @endif

    @if (session('warning'))
      <div id="alert-warning" class="flex sm:items-center p-4 mb-4 text-sm text-yellow-800 bg-yellow-100 rounded-lg"
        role="alert">
        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <span class="ms-2">{{ session('warning') }}</span>
        <button type="button"
          class="ms-auto rounded p-1.5 hover:bg-yellow-200 focus:ring-2 focus:ring-yellow-300 h-8 w-8 flex items-center justify-center"
          data-dismiss-target="#alert-warning">
          ✕
        </button>
      </div>
    @endif

    @if (session('error'))
      <div id="alert-error" class="flex sm:items-center p-4 mb-4 text-sm text-red-800 bg-red-100 rounded-lg"
        role="alert">
        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <span class="ms-2">{{ session('error') }}</span>
        <button type="button"
          class="ms-auto rounded p-1.5 hover:bg-red-200 focus:ring-2 focus:ring-red-300 h-8 w-8 flex items-center justify-center"
          data-dismiss-target="#alert-error">
          ✕
        </button>
      </div>
    @endif
    {{-- End Alert Component --}}

    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Data Bobot Penilaian</h2>

    <a href="{{ route('bobot_penilaian.create') }}"
      class="mb-4 inline-block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-xl text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
      + Tambah Bobot
    </a>

    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-200">
        <thead class="text-xs uppercase bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300">
          <tr>
            <th class="px-6 py-3">No</th>
            <th class="px-6 py-3">Certainty Term</th>
            <th class="px-6 py-3">CF</th>
            <th class="px-6 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($bobot as $i => $row)
            <tr class="border-b border-gray-200 dark:border-slate-700">
              <td class="px-6 py-4">{{ $i + 1 }}</td>
              <td class="px-6 py-4">{{ $row->certainty_term }}</td>
              <td class="px-6 py-4">{{ $row->cf }}</td>
              <td class="px-6 py-4 flex space-x-3">
                <a href="{{ route('bobot_penilaian.edit', $row->id) }}"
                  class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-xl text-sm px-4 py-2 dark:focus:ring-yellow-900">Edit</a>
                <form action="{{ route('bobot_penilaian.destroy', $row->id) }}" method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus?')">
                  @csrf @method('DELETE')
                  <button type="submit"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-xl text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="text-center py-4 text-gray-500 dark:text-gray-400">Belum ada data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

  </div>
@endsection
