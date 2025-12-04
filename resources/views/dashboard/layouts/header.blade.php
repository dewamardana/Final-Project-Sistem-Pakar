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

    <span class="font-bold text-xl text-amber-500">MindCheck Dashboard</span>

    <!-- Profile -->
    <div class="flex items-center space-x-3">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">
          Logout
        </button>
      </form>
      <span class="text-gray-700 dark:text-gray-300">Admin</span>
      <img class="w-8 h-8 rounded-full" src="https://i.pravatar.cc/40" alt="user photo">
    </div>
  </div>
</nav>
