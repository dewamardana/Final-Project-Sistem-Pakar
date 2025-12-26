@extends('homepage.layout.main')
@section('content')
  <section class=" bg-secondary py-6 md:py-16 px-6">
    <div class="max-w-screen-xl mx-auto bg-third rounded-2xl shadow-lg p-8 relative overflow-hidden">
      <h2 class="text-2xl md:text-4xl font-bold text-center mb-6 text-white">
        Kuesioner Tingkat Depresi
      </h2>

      <!-- Progress Bar -->
      <div class="w-full bg-gray-200 dark:bg-slate-700 rounded-full h-2.5 mb-6">
        <div id="progress-bar" class="bg-accent-blue h-2.5 rounded-full transition-all duration-500 ease-in-out"
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
            <label class="text-white font-semibold">Nama Anda (Opsional)</label>
            <input type="text" name="nama_pasien" id="nama" placeholder="Opsional"
              class="w-full px-6 py-3 rounded-xl border border-neutral-gray bg-transparent focus:ring-2 focus:ring-accent-blue focus:border-transparent text-white mt-2">
          </div>

          <!-- Tanggal Lahir -->
          <div class="mb-4">
            <label class="text-white font-semibold">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir"
              class="w-full px-6 py-3 rounded-xl border border-neutral-gray bg-transparent focus:ring-2 focus:ring-accent-blue focus:border-transparent text-white mt-2">
          </div>

          <!-- Umur -->
          <div class="mb-4">
            <label class="text-white font-semibold">Umur</label>
            <input type="number" name="umur" id="umur"
              class="w-full px-6 py-3 rounded-xl border border-neutral-gray bg-transparent focus:ring-2 focus:ring-accent-blue focus:border-transparent text-white mt-2" readonly
              placeholder="Umur otomatis muncul setelah pilih tanggal lahir">
          </div>

          <!-- Jenis Kelamin -->
          <div class="mb-4">
            <label class="text-white font-semibold">Jenis Kelamin</label>
            <select name="jenis_kelamin"
              class="w-full px-6 py-3 rounded-xl border border-neutral-gray bg-transparent focus:ring-2 focus:ring-accent-blue focus:border-transparent text-white focus:bg-third mt-2">
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
            <div class="flex flex-col md:flex-row md:items-stretch items-center gap-4">
              <p class="text-4xl my-auto">{{ $gejala->kode }}</p>

              <hr class="bg-white border-0
                        w-full h-px
                        md:w-px md:h-auto">

              <p class="font-medium text-gray-800 dark:text-gray-200 my-auto">
                Dalam beberapa minggu terakhir, apakah Anda mengalami
                <span class="text-amber-600 dark:text-amber-400 font-semibold">
                  {{ strtolower($gejala->nama_gejala) }}
                </span>?
              </p>
            </div>


            <div class="grid md:grid-cols-2 grid-cols-1 gap-3 mt-6">
              @foreach ($bobot_penilaians as $bobot)
                <label class="cursor-pointer">
                  <input type="radio" name="gejala[{{ $gejala->id }}]" value="{{ $bobot->id }}" class="hidden peer"
                    @change="answered[{{ $i + 1 }}] = true">
                  <div class="p-3 border rounded-xl peer-checked:bg-primary peer-checked:text-white transition">
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
            class="px-4 py-2 rounded-lg bg-gray-400 hover:bg-gray-500 text-white font-semibold">
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
            class="px-4 py-2 rounded-lg bg-primary hover:bg-amber-600 text-white transition font-semibold"
            :class="{ 'opacity-50 cursor-not-allowed': step > 0 && !answered[step] }">
            Selanjutnya
          </button>

          <button type="submit" x-show="step === total"
            class="px-4 py-2 rounded-lg bg-accent-mint hover:bg-green-600 text-white font-semibold">
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
