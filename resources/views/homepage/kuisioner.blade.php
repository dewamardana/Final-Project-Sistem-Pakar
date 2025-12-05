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

      <form action="{{ route('kuisioner.submit') }}" method="POST" id="quizForm" x-data="{
          step: 0,
          total: {{ count($gejalas) }},
          answered: {}
      }">
        @csrf


        <!-- ==========================
             STEP 0 — IDENTITAS DIRI
        ========================== -->
        <div x-show="step === 0" x-transition>

          <!-- Nama -->
          <div class="mb-4">
            <label class="block font-medium text-gray-700 dark:text-gray-300">Nama Anda (Opsional)</label>
            <input type="text" name="nama_pasien" id="nama" placeholder="Opsional"
              class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-slate-700 text-gray-900 dark:text-gray-100">
          </div>

          <!-- Tanggal Lahir -->
          <div class="mb-4">
            <label class="block font-medium text-gray-700 dark:text-gray-300">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir"
              class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-slate-700 text-gray-900 dark:text-gray-100">
          </div>

          <!-- Umur -->
          <div class="mb-4">
            <label class="block font-medium text-gray-700 dark:text-gray-300">Umur</label>
            <input type="number" name="umur" id="umur"
              class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-slate-700 text-gray-900 dark:text-gray-100"
              placeholder="Umur otomatis muncul setelah pilih tanggal lahir">
          </div>

          <!-- Jenis Kelamin -->
          <div class="mb-4">
            <label class="block font-medium text-gray-700 dark:text-gray-300">Jenis Kelamin</label>
            <select name="jenis_kelamin"
              class="w-full px-4 py-2 border rounded-lg bg-white dark:bg-slate-700 
                   text-gray-900 dark:text-gray-100">
              <option value="">-- Pilih --</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>

        </div>


        <!-- ==========================
             STEP GEJALA
        ========================== -->
        @foreach ($gejalas as $i => $gejala)
          <div x-show="step === {{ $i + 1 }}" x-transition>
            <p class="mb-4 font-medium text-gray-800 dark:text-gray-200">
              Dalam beberapa minggu terakhir, apakah Anda mengalami
              <span class="text-amber-600 dark:text-amber-400 font-semibold">
                {{ strtolower($gejala->nama_gejala) }}
              </span>?
            </p>

            <div class="grid grid-cols-2 gap-3">
              @foreach ($bobot_penilaians as $bobot)
                <label class="cursor-pointer">
                  <input type="radio" name="gejala[{{ $gejala->id }}]" value="{{ $bobot->id }}" class="hidden peer"
                    @change="answered[{{ $i + 1 }}] = true">
                  <div class="p-3 border rounded-lg peer-checked:bg-amber-500 peer-checked:text-white transition">
                    {{ $bobot->certainty_term }}
                  </div>
                </label>
              @endforeach
            </div>
          </div>
        @endforeach


        <!-- ==========================
             TOMBOL NAVIGASI
        ========================== -->
        <div class="mt-6 flex justify-between">
          <button type="button" x-show="step > 0"
            @click="step--; document.getElementById('progress-bar').style.width = ((step / total) * 100) + '%';"
            class="px-4 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 text-white">
            Kembali
          </button>

          <button type="button" x-show="step < total" :disabled="step > 0 && !answered[step]"
            @click="
            if(step === 0 && !document.getElementById('nama').value){
                alert('Jika tidak mencantumkan nama, isi dengan -');
                return;
            }
            step++;
            document.getElementById('progress-bar').style.width = ((step / total) * 100) + '%';
          "
            class="px-4 py-2 rounded-lg bg-amber-500 hover:bg-amber-600 text-white transition"
            :class="{ 'opacity-50 cursor-not-allowed': step > 0 && !answered[step] }">
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
  <script src="//unpkg.com/alpinejs" defer></script>

  <script>
    // ==========================
    // Hitung Umur Otomatis
    // ==========================
    document.addEventListener("DOMContentLoaded", function() {
      const tgl = document.getElementById("tanggal_lahir");
      const umur = document.getElementById("umur");

      tgl.addEventListener("change", function() {
        if (!this.value) return;

        let lahir = new Date(this.value);
        let now = new Date();

        let usia = now.getFullYear() - lahir.getFullYear();
        let m = now.getMonth() - lahir.getMonth();

        if (m < 0 || (m === 0 && now.getDate() < lahir.getDate())) {
          usia--;
        }

        umur.value = usia;
      });
    });
  </script>
@endsection
