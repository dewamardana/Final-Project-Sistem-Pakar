<!-- Header -->
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-slate-800 dark:border-slate-700">
  <div class="px-4 py-3 flex justify-between items-center">
    <!-- Toggle Sidebar -->
    <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-controls="sidebar"
      class="p-2 text-gray-600 rounded-lg sm:hidden hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-slate-700">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <a href="/">
      <img src="{{ asset('image/LogoNavbar.svg') }}" alt="">
    </span></a>

    <!-- Profile -->
    <div class="flex items-center space-x-3">
      <span class="text-gray-700 dark:text-gray-300 hidden md:block">Admin</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path fill="#FE9A00" d="M12 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm4.01 3.832a3.5 3.5 0 0 1 2.437-.203A3 3 0 0 0 16.999 5a3 3 0 0 0-.99 5.833m-2.308 3.298A2.5 2.5 0 0 0 12 16.5v2.49c-.884.587-2.16 1.01-4 1.01-6 0-6-4.5-6-4.5v-.25A2.25 2.25 0 0 1 4.25 13h7.5a2.25 2.25 0 0 1 1.952 1.13M15 15v-1a2.5 2.5 0 0 1 5 0v1h.5a1.5 1.5 0 0 1 1.5 1.5v5a1.5 1.5 0 0 1-1.5 1.5h-6a1.5 1.5 0 0 1-1.5-1.5v-5a1.5 1.5 0 0 1 1.5-1.5h.5Zm1.5-1v1h2v-1a1 1 0 0 0-2 0Zm2 5a1 1 0 1 0-2 0 1 1 0 0 0 2 0Z"/>
      </svg>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">
          Logout
        </button>
      </form>


    </div>
  </div>
</nav>
