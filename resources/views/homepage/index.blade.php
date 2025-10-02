@extends('homepage.layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-[90vh]"
    style="background-image: url('https://source.unsplash.com/1600x900/?calm,psychology')">
    <div class="absolute inset-0 bg-white bg-opacity-70 dark:bg-slate-900 dark:bg-opacity-70 transition-colors"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 mt-12">

      <h1 class="text-4xl md:text-6xl font-bold mb-6">
        Kenali <span class="text-amber-500">Kesehatan Mentalmu</span>
      </h1>
      <p class="text-lg text-gray-600 dark:text-slate-300 mb-8 max-w-2xl">
        Ikuti kuesioner sederhana untuk mendapatkan gambaran awal tentang kondisi emosimu.
      </p>
      <a href="/kuisioner" class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-lg font-semibold transition">
        Mulai Tes Sekarang
      </a>
    </div>
  </section>

  <!-- Tentang -->
  <section class="py-20 bg-gray-50 dark:bg-slate-800 transition-colors">
    <div class="max-w-6xl mx-auto gap-10 items-center px-6">
      <div class="text-center">
        <h2 class="text-3xl font-bold mb-4 flex items-center justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-amber-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
          </svg>
          Tentang Aplikasi Ini
        </h2>
        <p class="text-gray-700 dark:text-slate-300 leading-relaxed">
          MindCheck dibuat sebagai alat bantu bagi mahasiswa untuk menyadari tingkat depresi atau stres
          yang mungkin dialami. Hasil bukan diagnosis medis, melainkan sebagai langkah awal untuk mencari
          pertolongan yang tepat.
        </p>
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
        <!-- Card -->
        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden">
          <img src="https://source.unsplash.com/600x400/?relax,meditation" class="w-full h-48 object-cover"
            alt="">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">5 Cara Mengurangi Stres</h3>
            <p class="text-gray-600 dark:text-slate-400 mb-4">
              Tips sederhana agar tetap tenang dalam kesibukan.
            </p>
            <a href="#" class="text-amber-500 font-semibold hover:underline">Baca Selengkapnya →</a>
          </div>
        </div>
        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden">
          <img src="https://source.unsplash.com/600x400/?mental,therapy" class="w-full h-48 object-cover" alt="">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Kesehatan Mental vs Fisik</h3>
            <p class="text-gray-600 dark:text-slate-400 mb-4">
              Pentingnya menjaga mental sama seperti fisik.
            </p>
            <a href="#" class="text-amber-500 font-semibold hover:underline">Baca Selengkapnya →</a>
          </div>
        </div>
        <div class="bg-gray-50 dark:bg-slate-800 rounded-xl shadow-lg hover:shadow-xl transition overflow-hidden">
          <img src="https://source.unsplash.com/600x400/?support,community" class="w-full h-48 object-cover"
            alt="">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">Dukungan Sosial itu Penting</h3>
            <p class="text-gray-600 dark:text-slate-400 mb-4">
              Teman & keluarga bisa bantu jaga emosi tetap stabil.
            </p>
            <a href="#" class="text-amber-500 font-semibold hover:underline">Baca Selengkapnya →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimoni -->
  <section class="py-20 bg-gray-100 dark:bg-slate-800 transition-colors">
    <div class="max-w-6xl mx-auto text-center px-6">
      <h2 class="text-3xl font-bold mb-8 flex justify-center items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-amber-500" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M17 20h5v-2a3 3 0 00-3-3h-2V9a7 7 0 00-14 0v6H2a3 3 0 00-3 3v2h5" />
        </svg>
        Apa Kata Pengguna
      </h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="p-8 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
          <p class="italic text-gray-600 dark:text-slate-300 mb-4">“Tesnya singkat tapi membuka mata saya...”</p>
          <h4 class="font-semibold">— Rina, 21 tahun</h4>
        </div>
        <div class="p-8 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
          <p class="italic text-gray-600 dark:text-slate-300 mb-4">“Mudah dipahami dan membuat saya sadar...”</p>
          <h4 class="font-semibold">— Andi, 23 tahun</h4>
        </div>
        <div class="p-8 bg-white dark:bg-slate-900 rounded-2xl shadow-lg">
          <p class="italic text-gray-600 dark:text-slate-300 mb-4">“Bermanfaat untuk mahasiswa yang sering stres.”</p>
          <h4 class="font-semibold">— Siti, 20 tahun</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="py-20 bg-white dark:bg-slate-900 transition-colors">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-8 flex justify-center items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-amber-500" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M12 4h9M4 12h16" />
        </svg>
        Pertanyaan Umum
      </h2>

      <div class="space-y-4">
        <!-- Item 1 -->
        <div class="rounded-lg border border-gray-300 dark:border-slate-700 overflow-hidden">
          <button
            class="w-full text-left p-5 font-medium flex justify-between items-center hover:bg-gray-100 dark:hover:bg-slate-800 transition">
            Apa itu MindCheck?
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="p-5 text-gray-600 dark:text-slate-300 hidden">
            Sebuah aplikasi sederhana yang membantu mahasiswa mengenali kondisi mentalnya melalui tes singkat.
          </div>
        </div>

        <!-- Item 2 -->
        <div class="rounded-lg border border-gray-300 dark:border-slate-700 overflow-hidden">
          <button
            class="w-full text-left p-5 font-medium flex justify-between items-center hover:bg-gray-100 dark:hover:bg-slate-800 transition">
            Apakah hasil tes akurat?
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="p-5 text-gray-600 dark:text-slate-300 hidden">
            Tes ini hanya memberikan gambaran umum. Untuk diagnosis lebih tepat, sebaiknya konsultasikan dengan tenaga
            profesional.
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
