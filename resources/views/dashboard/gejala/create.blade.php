@extends('dashboard.layouts.main')
@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Tambah Artikel Baru</h2>
    <form action="#" method="POST" class="space-y-4">
      @csrf
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Judul</label>
        <input type="text" name="judul"
          class="block w-full p-2 border rounded-lg text-gray-900 dark:text-gray-100 dark:bg-slate-700 dark:border-slate-600 focus:ring-amber-500 focus:border-amber-500">
      </div>
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Kategori</label>
        <select name="kategori"
          class="block w-full p-2 border rounded-lg text-gray-900 dark:text-gray-100 dark:bg-slate-700 dark:border-slate-600 focus:ring-amber-500 focus:border-amber-500">
          <option value="artikel">Artikel</option>
          <option value="berita">Berita</option>
        </select>
      </div>
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-200">Konten</label>
        <textarea name="konten" rows="5"
          class="block w-full p-2 border rounded-lg text-gray-900 dark:text-gray-100 dark:bg-slate-700 dark:border-slate-600 focus:ring-amber-500 focus:border-amber-500"></textarea>
      </div>
      <button type="submit" class="bg-amber-500 text-white px-4 py-2 rounded-lg hover:bg-amber-600">Simpan</button>
    </form>
  </div>
@endsection
