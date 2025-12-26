<nav class="bg-third shadow-lg sticky top-0 z-50">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 px-6">
    
    <!-- Logo -->
    <a href="/" class="flex items-center space-x-2">
      <img src="{{ asset('image/LogoNavbar.svg') }}" alt="Mental Health" class="my-auto drop-shadow-lg w-full" />
    </a>
    
    <!-- Burger -->
    <button data-collapse-toggle="navbar-default" type="button"
      class="inline-flex items-center p-2 w-10 h-10 justify-center md:hidden hover:bg-neutral-secondary-soft text-white"
      aria-controls="navbar-default" aria-expanded="false">
      <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2"
        d="M5 7h14M5 12h14M5 17h14"/></svg>
    </button>

    <!-- MENU -->
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col md:flex-row md:space-x-8 mt-4 md:mt-0 p-4 md:p-0 rounded-xl border md:border-0 bg-white/5 md:bg-transparent">
        
        <li><a href="{{ route('homepage') }}#utama"    class="nav-link hover:text-primary hover:underline hover:underline-offset-8 text-white block py-2 px-3">Utama</a></li>

        <li>
          <a href="{{ route('kuisioner') }}"
              class="nav-link hover:text-primary hover:underline hover:underline-offset-8 block py-2 px-3
              {{ request()->routeIs('kuisioner') ? 'text-primary font-bold underline underline-offset-8' : 'text-white' }}">
              Tes Depresi
          </a>
        </li>

        <li><a href="{{ route('homepage') }}#artikel"  class="nav-link hover:text-primary hover:underline hover:underline-offset-8 text-white block py-2 px-3">Artikel</a></li>

        <li><a href="{{ route('homepage') }}#faq"      class="nav-link hover:text-primary hover:underline hover:underline-offset-8 text-white block py-2 px-3">FAQ</a></li>
        
      </ul>

      <!-- Mobile Login -->
      <div class="md:hidden mt-6">
        @auth
          <a href="{{ route('dashboard') }}"
              class="text-white bg-primary hover:bg-primary/60 font-semibold rounded-xl px-5 py-3">
              Dashboard
          </a>
        @endauth
        @guest
          <a href="{{ route('login.index') }}"
              class="text-white bg-primary hover:bg-primary/60 font-semibold rounded-xl px-5 py-3">
              Masuk
          </a>
        @endguest
      </div>
    </div>


    @auth
      <div class="hidden md:block">
        <a href="{{ route('dashboard') }}"
            class="text-white bg-primary hover:bg-primary/60 font-semibold rounded-xl px-5 py-3">
            Dashboard
        </a>
      </div>
    @endauth
    @guest
      <div class="hidden md:block">
        <a href="{{ route('login.index') }}"
            class="text-white bg-primary hover:bg-primary/60 font-semibold rounded-xl px-5 py-3">
            Masuk
        </a>
      </div>
    @endguest

  </div>
</nav>

@section('script')
<script>
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll(".nav-link");

  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.6 // Lebih sensitif terhadap scroll
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.getAttribute("id");

        navLinks.forEach(link => {
          // Cek apakah href mengandung ID yang sedang aktif
          if (link.getAttribute("href").includes(`#${id}`)) {
            link.classList.add("text-primary", "font-bold", "underline", "underline-offset-8");
            link.classList.remove("text-white");
          } else {
            // Jangan reset "Tes Depresi" jika sedang di halaman kuesioner
            if (!link.href.includes('kuisioner')) {
                link.classList.remove("text-primary", "font-bold", "underline", "underline-offset-8");
                link.classList.add("text-white");
            }
          }
        });
      }
    });
  }, observerOptions);

  sections.forEach(sec => observer.observe(sec));
});
</script>
@endsection

