@extends('dashboard.layouts.main')

@section('content')
  <div class="bg-white dark:bg-slate-800 shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-100">Daftar Jawaban</h2>

    <!-- Tombol tambah -->
    <button data-modal-target="createModal" data-modal-toggle="createModal"
      class="mb-4 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700">
      + Tambah Jawaban
    </button>

    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-700 dark:text-gray-200">
        <thead class="text-xs uppercase bg-gray-100 dark:bg-slate-700 text-gray-700 dark:text-gray-300">
          <tr>
            <th class="px-6 py-3">No</th>
            <th class="px-6 py-3">Nama Jawaban</th>
            <th class="px-6 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($jawabans as $i => $jawaban)
            <tr class="border-b border-gray-200 dark:border-slate-700">
              <td class="px-6 py-4">{{ $i + 1 }}</td>
              <td class="px-6 py-4">{{ $jawaban->nama }}</td>
              <td class="px-6 py-4 flex space-x-3">
                <!-- Edit Button -->
                <button data-modal-target="editModal-{{ $jawaban->id }}"
                  data-modal-toggle="editModal-{{ $jawaban->id }}"
                  class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2">
                  Edit
                </button>
                <!-- Delete -->
                <form action="{{ route('jawaban.destroy', $jawaban->id) }}" method="POST"
                  onsubmit="return confirm('Yakin hapus?')">
                  @csrf @method('DELETE')
                  <button type="submit"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                    Delete
                  </button>
                </form>
              </td>
            </tr>

            <!-- Modal Edit -->
            <div id="editModal-{{ $jawaban->id }}" tabindex="-1" aria-hidden="true"
              class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full flex">
              <div class="relative p-4 w-full max-w-md">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Header -->
                  <div class="flex justify-between items-center p-4 border-b dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Jawaban</h3>
                    <button type="button"
                      class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg w-8 h-8 flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                      data-modal-toggle="editModal-{{ $jawaban->id }}">
                      ✕
                    </button>
                  </div>
                  <!-- Body -->
                  <div class="p-4"> <!-- Tambahkan wrapper div dengan padding sama -->
                    <form action="{{ route('jawaban.update', $jawaban->id) }}" method="POST">
                      @csrf @method('PUT')
                      <div class="mb-4">
                        <label class="block mb-1 text-sm font-medium dark:text-white">Nama Jawaban</label>
                        <input type="text" name="nama" value="{{ $jawaban->nama }}"
                          class="w-full border rounded-lg px-3 py-2 dark:bg-gray-600 dark:text-white">
                        @error('nama')
                          <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="flex justify-end space-x-3">
                        <button type="button" data-modal-toggle="editModal-{{ $jawaban->id }}"
                          class="px-4 py-2 bg-gray-300 rounded-lg">Batal</button>
                        <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded-lg">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modal Create -->
  <div id="createModal" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full flex">
    <div class="relative p-4 w-full max-w-md">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Header -->
        <div class="flex justify-between items-center p-4 border-b dark:border-gray-600">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Jawaban</h3>
          <button type="button"
            class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg w-8 h-8 flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="createModal">
            ✕
          </button>
        </div>
        <!-- Body -->
        <form action="{{ route('jawaban.store') }}" method="POST" class="p-4">
          @csrf
          <div class="mb-4">
            <label class="block mb-1 text-sm font-medium dark:text-white">Nama Jawaban</label>
            <input type="text" name="nama"
              class="w-full border rounded-lg px-3 py-2 dark:bg-gray-600 dark:text-white">
            @error('nama')
              <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          </div>
          <div class="flex justify-end space-x-3">
            <button type="button" data-modal-toggle="createModal" class="px-4 py-2 bg-gray-300 rounded-lg">Batal</button>
            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
