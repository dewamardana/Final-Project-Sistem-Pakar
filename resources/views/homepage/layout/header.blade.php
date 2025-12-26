<nav class="bg-third shadow-lg sticky top-0 z-50">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-2">
      <img src="{{ asset('image/LogoNavbar.svg') }}" alt="Mental Health" class="mx-2 my-auto drop-shadow-lg w-full" />
    </a>
    
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:rounded-xl focus:ring-2" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>
    </button>

    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-xl md:bg-transparent bg-white/3 border-white/5 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
        <li>
          <a href="/" class="block py-2 px-3  text-white bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0 hover:text-primary hover:underline hover:underline-offset-8" aria-current="page">Dashboard</a>
        </li>
        <li>
          <a href="{{ route('kuisioner') }}" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 hover:text-primary hover:underline hover:underline-offset-8">Tes Depresi</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 hover:text-primary hover:underline hover:underline-offset-8">Artikel</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 hover:text-primary hover:underline hover:underline-offset-8">FaQ</a>
        </li>
      </ul>
      <div class="md:hidden mt-6 mb-2">
        <a href="{{ route('login.index') }}" class="text-white bg-primary hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-semibold rounded-xl textbase px-5 py-3 text-center  shadow-lg ml-auto">Masuk</a>
      </div>
    </div>
    <div class="hidden md:block">
      <a href="{{ route('login.index') }}" class="text-white bg-primary hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-semibold rounded-xl textbase px-5 py-3 text-center mr-3 md:mr-0 shadow-lg ">Masuk</a>
    </div>
  </div>
</nav>