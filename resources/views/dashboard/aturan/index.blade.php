@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6">

    {{-- Alert Component --}}
    @if (session('success'))
      <div id="alert-success" class="flex sm:items-center p-4 mb-4 text-sm text-green-800 bg-green-100 rounded-lg"
        role="alert">
        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
          height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <div class="ms-2 text-sm">
          {{ session('success') }}
        </div>
        <button type="button"
          class="ms-auto -mx-1.5 -my-1.5 rounded focus:ring-2 focus:ring-success-medium p-1.5 hover:bg-success-medium inline-flex items-center justify-center h-8 w-8"
          data-dismiss-target="#alert-success" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18 17.94 6M18 18 6.06 6" />
          </svg>
        </button>
      </div>
    @endif

    @if (session('warning'))
      <div id="alert-warning" class="flex sm:items-center p-4 mb-4 text-sm text-yellow-800 bg-yellow-100 rounded-lg"
        role="alert">
        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
          height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <div class="ms-2 text-sm">
          {{ session('warning') }}
        </div>
        <button type="button"
          class="ms-auto -mx-1.5 -my-1.5 rounded focus:ring-2 focus:ring-warning-medium p-1.5 hover:bg-warning-medium inline-flex items-center justify-center h-8 w-8"
          data-dismiss-target="#alert-warning" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18 17.94 6M18 18 6.06 6" />
          </svg>
        </button>
      </div>
    @endif

    @if (session('error'))
      <div id="alert-error" class="flex sm:items-center p-4 mb-4 text-sm text-red-800 bg-red-100 rounded-lg"
        role="alert">
        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
          height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <div class="ms-2 text-sm">
          {{ session('error') }}
        </div>
        <button type="button"
          class="ms-auto -mx-1.5 -my-1.5 bg-danger-soft text-fg-danger-strong rounded focus:ring-2 focus:ring-danger-medium p-1.5 hover:bg-danger-medium inline-flex items-center justify-center h-8 w-8"
          data-dismiss-target="#alert-error" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18 17.94 6M18 18 6.06 6" />
          </svg>
        </button>
      </div>
    @endif
    {{-- End Alert Component --}}

    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Data Aturan</h2>

    <a href="{{ route('aturan.create') }}"
      class="mb-4 inline-block text-white bg-green-700 hover:bg-green-800 rounded-xl text-sm px-5 py-2.5">
      + Tambah Aturan
    </a>

    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-200">
        <thead class="text-xs uppercase bg-gray-100 dark:bg-slate-700">
          <tr>
            <th class="px-6 py-3">No</th>
            <th class="px-6 py-3">Kode</th>
            <th class="px-6 py-3">Penyakit</th>
            <th class="px-6 py-3">Min Gejala Utama</th>
            <th class="px-6 py-3">Min Gejala Lain</th>
            <th class="px-6 py-3">Wajib G011</th>
            <th class="px-6 py-3">Wajib G012</th>
            <th class="px-6 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($aturan as $i => $a)
            <tr class="border-b dark:border-slate-700">
              <td class="px-6 py-4">{{ $i + 1 }}</td>
              <td class="px-6 py-4 font-semibold">{{ $a->kode }}</td>
              <td class="px-6 py-4">{{ $a->penyakit->nama_penyakit }}</td>
              <td class="px-6 py-4">{{ $a->min_gejala_utama }}</td>
              <td class="px-6 py-4">{{ $a->min_gejala_lain }}</td>
              <td class="px-6 py-4">{{ $a->wajib_g011 ? 'Ya' : 'Tidak' }}</td>
              <td class="px-6 py-4">{{ $a->wajib_g012 ? 'Ya' : 'Tidak' }}</td>
              <td class="px-6 py-4 flex space-x-3">
                <a href="{{ route('aturan.edit', $a->id) }}"
                  class="text-white bg-yellow-400 hover:bg-yellow-500 rounded-xl text-sm px-4 py-2">Edit</a>

                <form action="{{ route('aturan.destroy', $a->id) }}" method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus?')">
                  @csrf @method('DELETE')
                  <button type="submit"
                    class="text-white bg-red-700 hover:bg-red-800 rounded-xl text-sm px-4 py-2">Delete</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="7" class="text-center py-4 text-gray-500 dark:text-gray-400">Belum ada data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

  </div>
@endsection
