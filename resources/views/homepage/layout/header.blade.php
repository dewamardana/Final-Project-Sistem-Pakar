<nav
  class="bg-gray-100 dark:bg-slate-800 border-b border-gray-200 dark:border-slate-700 transition-colors sticky top-0 z-50">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-2">
      <img src="{{ asset('image/mindCheck.png') }}" alt="Mental Health" class="mx-2 my-auto drop-shadow-lg w-10 h-12" />
      <span class="text-amber-500 text-xl font-bold">MindCheck</span>
    </a>

    <div class="hidden md:flex space-x-6">
      <a href="{{ route('kuisioner') }}" class="hover:text-amber-500">Tes Mental</a>
      <a href="/#artikel" class="hover:text-amber-500">Artikel</a>
      <a href="/#testimoni" class="hover:text-amber-500">Testimoni</a>
      <a href="/#faq" class="hover:text-amber-500">FAQ</a>
      <a href="/#kontak" class="hover:text-amber-500">Kontak</a>
    </div>

    <div class="flex items-center space-x-4">
      <button id="theme-toggle" class="p-2 rounded-lg bg-gray-200 dark:bg-slate-700">
        🌙
      </button>
    </div>
  </div>
</nav>
