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

      <form action="" method="POST" id="quizForm" x-data="{ step: 1, total: {{ count($gejalas) }} }">
        @csrf

        <!-- Input Nama -->
        <div class="mb-4" x-show="step === 0">
          <label for="nama" class="block font-medium text-gray-700 dark:text-gray-300">Nama Anda</label>
          <input type="text" name="nama" id="nama" required
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring">
        </div>

        <!-- Pertanyaan -->
        @foreach ($gejalas as $i => $gejala)
          <div x-show="step === {{ $i + 1 }}" x-transition>
            <p class="mb-2 font-medium">{{ $gejala->kode }} - {{ $gejala->gejala }}</p>
            <div class="grid grid-cols-2 gap-3">
              @foreach ($gejala->jawabans as $jawaban)
                <label class="cursor-pointer">
                  <input type="radio" name="q{{ $gejala->id }}" value="{{ $jawaban->pivot->nilai }}"
                    class="hidden peer" required>
                  <div class="p-3 border rounded-lg peer-checked:bg-amber-500 peer-checked:text-white">
                    {{ $jawaban->nama }}
                  </div>
                </label>
              @endforeach
            </div>
          </div>
        @endforeach

        <!-- Tombol Navigasi -->
        <div class="mt-6 flex justify-between">
          <button type="button" x-show="step > 0" @click="step--"
            class="px-4 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 text-white">
            Kembali
          </button>

          <button type="button" x-show="step < total"
            @click="
            // pastikan nama terisi jika step 0
            if(step === 0 && !document.getElementById('nama').value){ alert('Isi nama terlebih dahulu!'); return; }
            step++;
            document.getElementById('progress-bar').style.width = ((step / total) * 100) + '%';
        "
            class="px-4 py-2 rounded-lg bg-amber-500 hover:bg-amber-600 text-white">
            Lanjut
          </button>

          <button type="submit" x-show="step === total"
            class="px-4 py-2 rounded-lg bg-green-500 hover:bg-green-600 text-white">
            Selesai
          </button>
        </div>
      </form>


    </div>
  </section>
@endsection

@section('script')
  <!-- Alpine.js untuk interaktivitas -->
  <script src="//unpkg.com/alpinejs" defer></script>
@endsection
