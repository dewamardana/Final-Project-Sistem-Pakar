@extends('homepage.layout.main')

@section('content')
  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-[90vh]"
    style="background-image: url('https://source.unsplash.com/1600x900/?calm,psychology')">
    <div class="absolute inset-0 bg-white bg-opacity-70 dark:bg-slate-900 dark:bg-opacity-70 transition-colors"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 mt-12 animate-fadeIn">
      <h1 class="text-4xl md:text-6xl font-bold mb-6">
        Kenali <span class="text-amber-500">Kesehatan Mentalmu</span>
      </h1>
      <p class="text-lg text-gray-600 dark:text-slate-300 mb-8 max-w-2xl">
        Ikuti kuesioner sederhana untuk mendapatkan gambaran awal kondisi emosimu.
      </p>

      <a href="{{ route('kuisioner') }}"
        class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-lg font-semibold transition hover:scale-105 shadow-lg">
        Mulai Tes Sekarang
      </a>
    </div>
  </section>

  <!-- Fitur Utama -->
  <section class="py-20 bg-gray-50 dark:bg-slate-800 transition-colors">
    <div class="max-w-6xl mx-auto px-6 text-center mb-12">
      <h2 class="text-3xl font-bold flex justify-center items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-amber-500" viewBox="0 0 24 24" fill="none"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Fitur Utama
      </h2>
    </div>

    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
      <!-- Card -->
      <div class="p-8 bg-white dark:bg-slate-900 rounded-2xl shadow-lg hover:shadow-xl transition hover:-translate-y-1">
        <h3 class="text-xl font-semibold mb-3">Tes Kondisi Mental</h3>
        <p class="text-gray-600 dark:text-slate-300">
          Kuesioner singkat berdasarkan indikator psikologi standar.
        </p>
      </div>

      <div class="p-8 bg-white dark:bg-slate-900 rounded-2xl shadow-lg hover:shadow-xl transition hover:-translate-y-1">
        <h3 class="text-xl font-semibold mb-3">Hasil Analisis Cepat</h3>
        <p class="text-gray-600 dark:text-slate-300">
          Dapatkan gambaran awal tingkat stres atau depresi dalam hitungan detik.
        </p>
      </div>

      <div class="p-8 bg-white dark:bg-slate-900 rounded-2xl shadow-lg hover:shadow-xl transition hover:-translate-y-1">
        <h3 class="text-xl font-semibold mb-3">Rekomendasi Langkah Awal</h3>
        <p class="text-gray-600 dark:text-slate-300">
          Saran ringan dan sehat untuk penanganan dini.
        </p>
      </div>
    </div>
  </section>

  <!-- Tentang Aplikasi -->
  <section class="py-20 bg-white dark:bg-slate-900 transition-colors">
    <div class="max-w-6xl mx-auto gap-10 items-center px-6 text-center">
      <h2 class="text-3xl font-bold mb-4">Tentang Aplikasi Ini</h2>
      <p class="text-gray-700 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed">
        MindCheck dibuat sebagai alat bantu bagi mahasiswa untuk menyadari tingkat depresi atau stres
        yang mungkin dialami. Hasil bukan diagnosis medis, melainkan sebagai langkah awal untuk mencari
        pertolongan yang tepat.
      </p>
    </div>
  </section>

  <!-- Statistik / Highlight -->
  <section class="py-20 bg-gray-100 dark:bg-slate-800 transition-colors">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 text-center">
      <div>
        <h3 class="text-4xl font-bold text-amber-500">+1200</h3>
        <p class="text-gray-600 dark:text-slate-300">Mahasiswa Telah Menggunakan</p>
      </div>
      <div>
        <h3 class="text-4xl font-bold text-amber-500">98%</h3>
        <p class="text-gray-600 dark:text-slate-300">Merasa Terbantu</p>
      </div>
      <div>
        <h3 class="text-4xl font-bold text-amber-500">5 Menit</h3>
        <p class="text-gray-600 dark:text-slate-300">Durasi Tes Rata-rata</p>
      </div>
    </div>
  </section>

  <!-- Artikel Populer -->
  <section class="py-20 bg-white dark:bg-slate-900 transition-colors">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12 flex justify-center items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-amber-500" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 8c-1.656 0-3-1.343-3-3S10.344 2 12 2s3 1.343 3 3-1.344 3-3 3zm0 4c2.21 0 4 1.79 4 4v6H8v-6c0-2.21 1.79-4 4-4z" />
        </svg>
        Artikel Populer
      </h2>

      <div class="grid gap-8 md:grid-cols-3">

        @foreach ([['img' => 'relax,meditation', 'judul' => '5 Cara Mengurangi Stres', 'text' => 'Tips sederhana agar tetap tenang dalam kesibukan.'], ['img' => 'mental,therapy', 'judul' => 'Kesehatan Mental vs Fisik', 'text' => 'Pentingnya menjaga mental sama seperti fisik.'], ['img' => 'support,community', 'judul' => 'Dukungan Sosial itu Penting', 'text' => 'Teman & keluarga membantu menjaga kestabilan emosi.']] as $a)
          <div
            class="bg-gray-50 dark:bg-slate-800 rounded-xl shadow-lg hover:shadow-xl transition hover:-translate-y-1 overflow-hidden">
            <img src="https://source.unsplash.com/600x400/?{{ $a['img'] }}" class="w-full h-48 object-cover">
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2">{{ $a['judul'] }}</h3>
              <p class="text-gray-600 dark:text-slate-400 mb-4">{{ $a['text'] }}</p>
              <a href="#" class="text-amber-500 font-semibold hover:underline">Baca Selengkapnya →</a>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>

  <!-- Testimoni -->
  <section class="py-20 bg-gray-100 dark:bg-slate-800 transition-colors">
    <div class="max-w-6xl mx-auto text-center px-6">
      <h2 class="text-3xl font-bold mb-8">Apa Kata Pengguna</h2>

      <div class="grid md:grid-cols-3 gap-8">
        @foreach ([['text' => '“Tesnya singkat tapi membuka mata saya...”', 'name' => 'Rina, 21 tahun'], ['text' => '“Mudah dipahami dan membuat saya sadar...”', 'name' => 'Andi, 23 tahun'], ['text' => '“Bermanfaat untuk mahasiswa yang sering stres.”', 'name' => 'Siti, 20 tahun']] as $t)
          <div class="p-8 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
            <p class="italic text-gray-600 dark:text-slate-300 mb-4">{{ $t['text'] }}</p>
            <h4 class="font-semibold">— {{ $t['name'] }}</h4>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="py-20 bg-white dark:bg-slate-900 transition-colors">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-8">Pertanyaan Umum</h2>

      <div class="space-y-4">
        @foreach ([['q' => 'Apa itu MindCheck?', 'a' => 'Sebuah aplikasi sederhana untuk membantu mahasiswa mengenali kondisi mentalnya.'], ['q' => 'Apakah hasil tes akurat?', 'a' => 'Tes ini hanya memberikan gambaran umum. Untuk diagnosis, silakan konsultasi profesional.']] as $f)
          <div class="rounded-lg border border-gray-300 dark:border-slate-700 overflow-hidden faq-item">
            <button
              class="w-full text-left p-5 font-medium flex justify-between items-center hover:bg-gray-100 dark:hover:bg-slate-800 transition faq-btn">
              {{ $f['q'] }}
              <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="p-5 text-gray-600 dark:text-slate-300 hidden faq-content">
              {{ $f['a'] }}
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 bg-amber-500 text-white text-center">
    <h2 class="text-3xl font-bold mb-4">Siap Memulai Tes?</h2>
    <p class="mb-6">Hanya butuh waktu 3–5 menit untuk memahami kondisi mentalmu.</p>
    <a href="{{ route('kuisioner') }}"
      class="bg-white text-amber-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg">
      Mulai Sekarang
    </a>
  </section>

  <script>
    document.querySelectorAll('.faq-btn').forEach((btn) => {
      btn.addEventListener('click', () => {
        const content = btn.nextElementSibling;
        content.classList.toggle('hidden');
        btn.querySelector('svg').classList.toggle('rotate-180');
      });
    });
  </script>
@endsection
