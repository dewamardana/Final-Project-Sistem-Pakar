@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Data Tingkat Depresi</h2>
    <a href="{{ route('depresi.create') }}"
      class="mb-4 inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      + Tambah Tingkat Depresi
    </a>

    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-200">
        <thead class="text-xs uppercase bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300">
          <tr>
            <th class="px-6 py-3">No</th>
            <th class="px-6 py-3">Kode</th>
            <th class="px-6 py-3">Nama Depresi</th>
            <th class="px-6 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($depresi as $index => $d)
            <tr class="border-b border-gray-200 dark:border-slate-700">
              <td class="px-6 py-4">{{ $index + 1 }}</td>
              <td class="px-6 py-4">{{ $d->kode }}</td>
              <td class="px-6 py-4">{{ $d->depresi }}</td>
              <td class="px-6 py-4 flex space-x-3">
                <a href="{{ route('depresi.edit', $d->id) }}"
                  class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-xl text-sm px-4 py-2 dark:focus:ring-yellow-900">Edit</a>
                <form action="{{ route('depresi.destroy', $d->id) }}" method="POST"
                  onsubmit="return confirm('Yakin hapus?')">
                  @csrf @method('DELETE')
                  <button type="submit"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-xl text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
