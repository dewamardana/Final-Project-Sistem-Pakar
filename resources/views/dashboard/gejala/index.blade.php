@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Data Artikel</h2>
    <a href="/dashboard/gejala/create"
      class="mb-4 inline-block bg-amber-500 text-white px-4 py-2 rounded-lg hover:bg-amber-600">
      + Tambah Data
    </a>
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-200">
        <thead class="text-xs uppercase bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300">
          <tr>
            <th class="px-6 py-3">Judul</th>
            <th class="px-6 py-3">Kategori</th>
            <th class="px-6 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-200 dark:border-slate-700">
            <td class="px-6 py-4 text-gray-800 dark:text-gray-100">5 Cara Mengurangi Stres</td>
            <td class="px-6 py-4 text-gray-800 dark:text-gray-100">Artikel</td>
            <td class="px-6 py-4 flex space-x-3">
              <a href="/dashboard/gejala/show" class="text-blue-600 dark:text-blue-400 hover:underline">Show</a>
              <a href="/dashboard/gejala/edit" class="text-yellow-600 dark:text-yellow-400 hover:underline">Edit</a>
              <button class="text-red-600 dark:text-red-400 hover:underline">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
