<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DepresiCheck</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="bg-white text-gray-900 dark:bg-slate-900 dark:text-slate-100 transition-colors duration-500">

  <!-- Navbar -->
  <nav class="bg-gray-100 dark:bg-slate-800 border-b border-gray-200 dark:border-slate-700 transition-colors">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-2">
        <span class="text-amber-500 text-xl font-bold">DepresiCheck</span>
      </a>
      <div class="hidden md:flex space-x-6">
        <a href="/dashboard" class="hover:text-amber-500">Dashboard</a>
        <a href="/form-faq" class="hover:text-amber-500">Tes Depresi</a>
        <a href="/artikel" class="hover:text-amber-500">Artikel</a>
        <a href="#faq" class="hover:text-amber-500">FAQ</a>
        <a href="#kontak" class="hover:text-amber-500">Kontak</a>
      </div>
      <div class="flex items-center space-x-4">
        <!-- Toggle Dark Mode -->
        <button id="theme-toggle" class="p-2 rounded-lg bg-gray-200 dark:bg-slate-700">
          🌙
        </button>
        <a href="/login" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg transition">Login</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="relative bg-cover bg-center h-[90vh]"
    style="background-image: url('https://source.unsplash.com/1600x900/?calm,psychology')">
    <div class="absolute inset-0 bg-white bg-opacity-70 dark:bg-slate-900 dark:bg-opacity-70 transition-colors"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
      <img src="https://img.icons8.com/fluency/200/mental-health.png" alt="Mental Health"
        class="mx-auto mb-6 drop-shadow-lg" />

      <h1 class="text-4xl md:text-6xl font-bold mb-6">Kenali <span class="text-amber-500">Kesehatan Mentalmu</span></h1>
      <p class="text-lg text-gray-600 dark:text-slate-300 mb-8 max-w-2xl">
        Ikuti kuesioner sederhana untuk mendapatkan gambaran awal tentang kondisi emosimu.
      </p>
      <a href="/form-faq"
        class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-lg font-semibold transition">Mulai Tes
        Sekarang</a>
    </div>
  </section>

  <!-- Tentang -->
  <section class="py-16 bg-white dark:bg-slate-900 transition-colors">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4">Tentang Aplikasi Ini</h2>
      <p class="text-gray-700 dark:text-slate-300">
        DepresiCheck dibuat sebagai alat bantu bagi mahasiswa untuk menyadari tingkat depresi yang mungkin dialami.
        Hasil bukan diagnosis medis, melainkan sebagai langkah awal untuk mencari pertolongan yang tepat.
      </p>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="py-16 bg-gray-100 dark:bg-slate-800 transition-colors">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-8">Pertanyaan Umum</h2>

      <div id="accordion-collapse" data-accordion="collapse">
        <!-- Item 1 -->
        <h2 id="faq-heading-1">
          <button type="button"
            class="flex justify-between items-center w-full p-5 font-medium text-left text-gray-900 dark:text-slate-200 border border-gray-300 dark:border-slate-700 rounded-t-lg hover:bg-gray-200 dark:hover:bg-slate-700"
            data-accordion-target="#faq-body-1" aria-expanded="false" aria-controls="faq-body-1">
            Apa itu DepresiCheck?
            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
        </h2>
        <div id="faq-body-1" class="hidden" aria-labelledby="faq-heading-1">
          <div class="p-5 border border-gray-300 dark:border-slate-700">
            Sebuah aplikasi sederhana yang membantu mahasiswa mengenali kondisi mentalnya melalui tes singkat.
          </div>
        </div>

        <!-- Item 2 -->
        <h2 id="faq-heading-2">
          <button type="button"
            class="flex justify-between items-center w-full p-5 font-medium text-left text-gray-900 dark:text-slate-200 border border-gray-300 dark:border-slate-700 hover:bg-gray-200 dark:hover:bg-slate-700"
            data-accordion-target="#faq-body-2" aria-expanded="false" aria-controls="faq-body-2">
            Apakah hasil tes akurat?
            <svg data-accordion-icon class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
        </h2>
        <div id="faq-body-2" class="hidden" aria-labelledby="faq-heading-2">
          <div class="p-5 border border-gray-300 dark:border-slate-700">
            Tes ini hanya memberikan gambaran umum. Untuk diagnosis lebih tepat, sebaiknya konsultasikan dengan tenaga
            profesional.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="kontak"
    class="bg-gray-100 dark:bg-slate-900 border-t border-gray-300 dark:border-slate-700 py-8 transition-colors">
    <div class="max-w-screen-xl mx-auto text-center">
      <p class="text-gray-600 dark:text-slate-400">© 2025 DepresiCheck. Aplikasi ini dikembangkan untuk tujuan edukasi
        dan penelitian.</p>
    </div>
  </footer>

  <!-- Script Flowbite -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

  <!-- Dark Mode Toggle Script -->
  <script>
    const themeToggle = document.getElementById('theme-toggle');
    const html = document.documentElement;

    // Load preference
    if (localStorage.getItem('theme') === 'light') {
      html.classList.remove('dark');
      themeToggle.textContent = '🌞';
    } else {
      html.classList.add('dark');
      themeToggle.textContent = '🌙';
    }

    // Toggle on click
    themeToggle.addEventListener('click', () => {
      html.classList.toggle('dark');
      if (html.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
        themeToggle.textContent = '🌙';
      } else {
        localStorage.setItem('theme', 'light');
        themeToggle.textContent = '🌞';
      }
    });
  </script>
</body>

</html>
