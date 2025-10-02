@extends('homepage.layout.main')
@section('content')
  <section class="min-h-screen bg-gray-50 dark:bg-slate-900 py-16 transition-colors">
    <div class="max-w-2xl mx-auto bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-8 relative overflow-hidden">
      <h2 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-slate-100">
        Kuesioner Kesehatan Mental
      </h2>

      <!-- Progress Bar -->
      <div class="w-full bg-gray-200 dark:bg-slate-700 rounded-full h-2.5 mb-6">
        <div id="progress-bar" class="bg-amber-500 h-2.5 rounded-full transition-all duration-500 ease-in-out"
          style="width: 0%"></div>
      </div>

      <!-- Form -->
      <form action="" method="POST" id="quizForm" x-data="{ step: 1, total: 3 }">
        @csrf

        <!-- Pertanyaan 1 -->
        <div x-show="step === 1" x-transition>
          <p class="text-lg font-medium mb-4 text-gray-800 dark:text-gray-200">
            1. Seberapa sering Anda merasa sedih tanpa alasan yang jelas?
          </p>
          <div class="grid grid-cols-2 gap-4">
            @foreach (['Tidak Pernah', 'Jarang', 'Sering', 'Sangat Sering'] as $i => $opt)
              <label class="cursor-pointer">
                <input type="radio" name="q1" value="{{ $opt }}" class="hidden peer" required>
                <div
                  class="p-4 text-center rounded-lg border border-gray-300 dark:border-slate-600 peer-checked:bg-amber-500 peer-checked:text-white transition">
                  {{ $opt }}
                </div>
              </label>
            @endforeach
          </div>
          <button type="button" @click="step++ ; document.getElementById('progress-bar').style.width = '33%'"
            class="mt-6 w-full bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg">Lanjut</button>
        </div>

        <!-- Pertanyaan 2 -->
        <div x-show="step === 2" x-transition>
          <p class="text-lg font-medium mb-4 text-gray-800 dark:text-gray-200">
            2. Apakah Anda kesulitan tidur atau sering terbangun di malam hari?
          </p>
          <div class="grid grid-cols-2 gap-4">
            @foreach (['Tidak Pernah', 'Kadang-kadang', 'Sering', 'Hampir Selalu'] as $i => $opt)
              <label class="cursor-pointer">
                <input type="radio" name="q2" value="{{ $opt }}" class="hidden peer" required>
                <div
                  class="p-4 text-center rounded-lg border border-gray-300 dark:border-slate-600 peer-checked:bg-amber-500 peer-checked:text-white transition">
                  {{ $opt }}
                </div>
              </label>
            @endforeach
          </div>
          <div class="flex justify-between mt-6">
            <button type="button" @click="step-- ; document.getElementById('progress-bar').style.width = '0%'"
              class="px-4 py-2 rounded-lg border border-gray-300 dark:border-slate-600 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-slate-700">Kembali</button>
            <button type="button" @click="step++ ; document.getElementById('progress-bar').style.width = '66%'"
              class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg">Lanjut</button>
          </div>
        </div>

        <!-- Pertanyaan 3 -->
        <div x-show="step === 3" x-transition>
          <p class="text-lg font-medium mb-4 text-gray-800 dark:text-gray-200">
            3. Apakah Anda merasa kehilangan minat pada aktivitas yang biasanya menyenangkan?
          </p>
          <div class="grid grid-cols-2 gap-4">
            @foreach (['Tidak Pernah', 'Kadang-kadang', 'Sering', 'Selalu'] as $i => $opt)
              <label class="cursor-pointer">
                <input type="radio" name="q3" value="{{ $opt }}" class="hidden peer" required>
                <div
                  class="p-4 text-center rounded-lg border border-gray-300 dark:border-slate-600 peer-checked:bg-amber-500 peer-checked:text-white transition">
                  {{ $opt }}
                </div>
              </label>
            @endforeach
          </div>
          <div class="flex justify-between mt-6">
            <button type="button" @click="step-- ; document.getElementById('progress-bar').style.width = '33%'"
              class="px-4 py-2 rounded-lg border border-gray-300 dark:border-slate-600 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-slate-700">Kembali</button>
            <button type="submit" @click="document.getElementById('progress-bar').style.width = '100%'"
              class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">Selesai</button>
          </div>
        </div>
      </form>
    </div>
  </section>
@endsection
@section('script')
  <!-- Alpine.js untuk interaktivitas -->
  <script src="//unpkg.com/alpinejs" defer></script>
@endsection
