@extends('homepage.layout.main')

@section('content')
  <!-- Hero Section -->
  <section id="utama" class="relative h-screen max-w-screen-xl mx-auto  flex justify-center items-center -translate-y-14 px-6">
    <div class="flex flex-col md:flex-row justify-center items-center gap-12">
      
      <img src="{{ asset('image/LogoDashboard.svg') }}" alt="" class="md:w-fit w-1/2">

      <div class="flex flex-col md:w-1/2 justify-center items-center md:items-start gap-6 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl">
          Kenali <span class="font-bold">Pikiran</span>,<br>
          Kenali <span class="font-bold text-primary">Kondisimu</span>
        </h1>
        <p>
          <span class="font-bold">Mind-U</span> adalah aplikasi sederhana untuk membantu mahasiswa mengenali kondisi mentalnya melalui
          kuesioner singkat dan mendapatkan gambaran awal tingkat stres atau depresi.
        </p>
        <a href="{{ route('kuisioner') }}" class="text-white bg-primary hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-semibold rounded-xl textbase px-5 py-3 shadow-lg w-fit">
          Tes Depresi
        </a>
      </div>
      
    </div>
  </section>


  <!-- Fitur Utama -->
  <section class="max-w-screen-xl mx-auto flex flex-col items-center justify-center gap-8 px-6">
    <h2 class="text-4xl text-primary font-semibold">Mind-U</h2>
    <div class="flex flex-col md:flex-row gap-8 max-w-screen-xl items-center justify-center">
      <div class="flex flex-col items-center justify-center md:gap-6 gap-2">
        <h3 class="text-3xl font-semibold">Kasus depresi</h3>
        <p class="md:text-[64px] text-4xl"><span class="font-bold text-primary">34,9%</span> / <span class="font-bold text-primary">15,5 juta</span></p>
        <h4 class="text-2xl font-semibold">Remaja Indonesia</h4>
      </div>
      <hr class="w-full h-px md:w-px md:h-60 bg-white border-0">
      <div class="flex flex-col gap-6 md:max-w-1/2 items-center md:items-start">
        <p class="text-justify">(I-NAMHS) yang dirilis pada tahun 2022 menunjukkan fakta bahwa satu dari tiga remaja Indonesia (34,9%) didiagnosis memiliki masalah kesehatan mental dalam 12 bulan terakhir Angka ini setara dengan 15,5 juta remaja (I-NAMHS, 2022). Cek kondisimu sekarang melalui tes kesehatan dengan menekan tombol dibawah ini!</p>
        <a href="{{ route('kuisioner') }}" class="text-white bg-primary hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-300 font-semibold rounded-xl textbase px-5 py-3 shadow-lg w-fit">
          Tes Depresi
        </a>
      </div>
    </div>
  </section>

  <section id="artikel" class="max-w-screen-xl mx-auto flex flex-col items-center justify-center gap-8 px-6 mt-30 md:mt-60 scroll-mt-28">
    <h2 class="text-4xl text-primary font-semibold">Artikel Kesehatan <span class="text-white">Untukmu.</span></h2>
    {{-- card section --}}
    <div class="w-full  overflow-x-scroll no-scrollbar" id="slider">
      <div class="flex flex-nowrap gap-6">
        {{-- card --}}
        <div class="h-[400px] w-[302px] md:h-[500px] md:w-[402px] bg-[#1D293D] rounded-2xl relative shrink-0">
          <div class="relative h-[145px] md:h-[245px] overflow-hidden rounded-t-2xl">
            <img src="{{ asset('image/artikel/defaultArtikel.png') }}" alt="" class="absolute inset-0 z-10">
            <div class="bg-linear-to-t from-black/70 to-black/0 z-20 relative h-full">
            </div>
          </div>
          <div class="px-6 py-3 flex flex-col gap-2 ">
            <h3 class="text-xl text-white font-semibold">Mencegah terjadinya depresi</h3>
            <p class="text-neutral-gray line-clamp-4 md:line-clamp-6 md:text-justify" >Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.</p>
            <a href="https://www.youtube.com/watch?v=8m5br9NdLcA&list=RDMM8m5br9NdLcA&start_radio=1" target="_blank" class="absolute bottom-6 right-6">
              <div class="flex gap-2 items-center text-white hover:underline hover:underline-offset-4 hover:text-primary ">
                <p>Lihat artikel</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 17 17">
                  <circle cx="8.5" cy="8.5" r="8.5" fill="#2E4161"/>
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m5.33 11.187 6.049-6.08m.313 4.345-.026-4.634-4.634-.002"/>
                </svg>
              </div>
            </a>
          </div>
        </div>
        {{-- end card --}}
        {{-- card --}}
        <div class="h-[400px] w-[302px] md:h-[500px] md:w-[402px] bg-[#1D293D] rounded-2xl relative shrink-0">
          <div class="relative h-[145px] md:h-[245px] overflow-hidden rounded-t-2xl">
            <img src="{{ asset('image/artikel/defaultArtikel.png') }}" alt="" class="absolute inset-0 z-10">
            <div class="bg-linear-to-t from-black/70 to-black/0 z-20 relative h-full">
            </div>
          </div>
          <div class="px-6 py-3 flex flex-col gap-2 ">
            <h3 class="text-xl text-white font-semibold">Mencegah terjadinya depresi</h3>
            <p class="text-neutral-gray line-clamp-4 md:line-clamp-6 md:text-justify" >Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.</p>
            <a href="https://www.youtube.com/watch?v=8m5br9NdLcA&list=RDMM8m5br9NdLcA&start_radio=1" target="_blank" class="absolute bottom-6 right-6">
              <div class="flex gap-2 items-center text-white hover:underline hover:underline-offset-4 hover:text-primary ">
                <p>Lihat artikel</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 17 17">
                  <circle cx="8.5" cy="8.5" r="8.5" fill="#2E4161"/>
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m5.33 11.187 6.049-6.08m.313 4.345-.026-4.634-4.634-.002"/>
                </svg>
              </div>
            </a>
          </div>
        </div>
        {{-- end card --}}
        {{-- card --}}
        <div class="h-[400px] w-[302px] md:h-[500px] md:w-[402px] bg-[#1D293D] rounded-2xl relative shrink-0">
          <div class="relative h-[145px] md:h-[245px] overflow-hidden rounded-t-2xl">
            <img src="{{ asset('image/artikel/defaultArtikel.png') }}" alt="" class="absolute inset-0 z-10">
            <div class="bg-linear-to-t from-black/70 to-black/0 z-20 relative h-full">
            </div>
          </div>
          <div class="px-6 py-3 flex flex-col gap-2 ">
            <h3 class="text-xl text-white font-semibold">Mencegah terjadinya depresi</h3>
            <p class="text-neutral-gray line-clamp-4 md:line-clamp-6 md:text-justify" >Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.</p>
            <a href="https://www.youtube.com/watch?v=8m5br9NdLcA&list=RDMM8m5br9NdLcA&start_radio=1" target="_blank" class="absolute bottom-6 right-6">
              <div class="flex gap-2 items-center text-white hover:underline hover:underline-offset-4 hover:text-primary ">
                <p>Lihat artikel</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 17 17">
                  <circle cx="8.5" cy="8.5" r="8.5" fill="#2E4161"/>
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m5.33 11.187 6.049-6.08m.313 4.345-.026-4.634-4.634-.002"/>
                </svg>
              </div>
            </a>
          </div>
        </div>
        {{-- end card --}}
        {{-- card --}}
        <div class="h-[400px] w-[302px] md:h-[500px] md:w-[402px] bg-[#1D293D] rounded-2xl relative shrink-0">
          <div class="relative h-[145px] md:h-[245px] overflow-hidden rounded-t-2xl">
            <img src="{{ asset('image/artikel/defaultArtikel.png') }}" alt="" class="absolute inset-0 z-10">
            <div class="bg-linear-to-t from-black/70 to-black/0 z-20 relative h-full">
            </div>
          </div>
          <div class="px-6 py-3 flex flex-col gap-2 ">
            <h3 class="text-xl text-white font-semibold">Mencegah terjadinya depresi</h3>
            <p class="text-neutral-gray line-clamp-4 md:line-clamp-6 md:text-justify" >Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.</p>
            <a href="https://www.youtube.com/watch?v=8m5br9NdLcA&list=RDMM8m5br9NdLcA&start_radio=1" target="_blank" class="absolute bottom-6 right-6">
              <div class="flex gap-2 items-center text-white hover:underline hover:underline-offset-4 hover:text-primary ">
                <p>Lihat artikel</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 17 17">
                  <circle cx="8.5" cy="8.5" r="8.5" fill="#2E4161"/>
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m5.33 11.187 6.049-6.08m.313 4.345-.026-4.634-4.634-.002"/>
                </svg>
              </div>
            </a>
          </div>
        </div>
        {{-- end card --}}
        {{-- card --}}
        <div class="h-[400px] w-[302px] md:h-[500px] md:w-[402px] bg-[#1D293D] rounded-2xl relative shrink-0">
          <div class="relative h-[145px] md:h-[245px] overflow-hidden rounded-t-2xl">
            <img src="{{ asset('image/artikel/defaultArtikel.png') }}" alt="" class="absolute inset-0 z-10">
            <div class="bg-linear-to-t from-black/70 to-black/0 z-20 relative h-full">
            </div>
          </div>
          <div class="px-6 py-3 flex flex-col gap-2 ">
            <h3 class="text-xl text-white font-semibold">Mencegah terjadinya depresi</h3>
            <p class="text-neutral-gray line-clamp-4 md:line-clamp-6 md:text-justify" >Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.Membahas tentang bagaimana langkah yang baik dalam mengendalikan diri untuk mencegah pikiran dalam diri.</p>
            <a href="https://www.youtube.com/watch?v=8m5br9NdLcA&list=RDMM8m5br9NdLcA&start_radio=1" target="_blank" class="absolute bottom-6 right-6">
              <div class="flex gap-2 items-center text-white hover:underline hover:underline-offset-4 hover:text-primary ">
                <p>Lihat artikel</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 17 17">
                  <circle cx="8.5" cy="8.5" r="8.5" fill="#2E4161"/>
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m5.33 11.187 6.049-6.08m.313 4.345-.026-4.634-4.634-.002"/>
                </svg>
              </div>
            </a>
          </div>
        </div>
        {{-- end card --}}
        
    </div>
  </div>
  <div class="flex gap-4 ">
    <button id="slideLeft">
      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="none" viewBox="0 0 45 45">
        <circle cx="22.5" cy="22.5" r="22.5" fill="#2E4161" transform="matrix(-1 0 0 1 45 0)"/>
        <path stroke="#FE9A00" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M34.394 21.189h-22.7m7.567 8.7-8.647-8.7 8.647-8.701"/>
      </svg>
    </button>
    <button id="slideRight">
      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="none" viewBox="0 0 45 45">
        <circle cx="22.5" cy="22.5" r="22.5" fill="#2E4161"/>
        <path stroke="#FE9A00" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.606 21.189h22.7m-7.567 8.7 8.647-8.7-8.647-8.701"/>
      </svg>
    </button>
  </div>
  </section>

  

  <!-- FAQ -->
  <section  id="faq" class="max-w-screen-xl mx-auto flex flex-col items-center justify-center gap-8 px-6 mt-20 md:mt-40 scroll-mt-28 mb-20">
    <h2 class="text-4xl text-primary font-semibold">Frequently <span class="text-white">and</span> Answer.</h2>
    <!-- ACCORDION -->
    <div x-data="{ open: null }" class="flex flex-col gap-6 w-full ">

      <!-- ITEM 1 -->
      <div class="w-full flex flex-col">
        <button @click="open === 1 ? open = null : open = 1"
                class="w-full flex justify-between items-center px-3">
          <h3 class="text-lg md:text-2xl text-start">Bagaimana Mind-U terbentuk?</h3>
          <svg :class="open === 1 && 'rotate-180'" class="transition-transform"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                  d="m6.999 13.998 4.666-4.666 4.666 4.666"/>
          </svg>
        </button>
        <hr class="my-2 w-full">

        <div x-show="open === 1" x-collapse class="w-full">
          <p class="px-3 text-neutral-gray">
            Mind-U adalah sebuah sistem yang dikembangkan untuk membantu meningkatkan pemahaman masyarakat mengenai penyakit depresi melalui self-assessment.
          </p>
        </div>
      </div>


      <!-- ITEM 2 -->
      <div class="w-full flex flex-col">
        <button @click="open === 2 ? open = null : open = 2"
                class="w-full flex justify-between items-center px-3">
          <h3 class="text-lg md:text-2xl text-start">Apa tujuan dibangunnya Mind-U?</h3>
          <svg :class="open === 2 && 'rotate-180'" class="transition-transform"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                  d="m6.999 13.998 4.666-4.666 4.666 4.666"/>
          </svg>
        </button>
        <hr class="my-2 w-full">

        <div x-show="open === 2" x-collapse class="w-full">
          <p class="px-3 text-neutral-gray">
            Untuk membantu pengguna mengenali emosi, memahami gejala awal depresi,
            serta memberikan rekomendasi langkah awal yang dapat dilakukan secara mandiri.
          </p>
        </div>
      </div>


      <!-- ITEM 3 -->
      <div class="w-full flex flex-col">
        <button @click="open === 3 ? open = null : open = 3"
                class="w-full flex justify-between items-center px-3">
          <h3 class="text-lg md:text-2xl text-start">Bagaimana cara kerjanya?</h3>
          <svg :class="open === 3 && 'rotate-180'" class="transition-transform"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                  d="m6.999 13.998 4.666-4.666 4.666 4.666"/>
          </svg>
        </button>
        <hr class="my-2 w-full">

        <div x-show="open === 3" x-collapse class="w-full">
          <p class="px-3 text-neutral-gray">
            Sistem bekerja dengan menerima input pengguna, kemudian melakukan analisis sederhana berbasis rule yang berdasarkan pedoman PPDGJ (Pedoman Penggolongan dan Diagnosis Gangguan Jiwa) edisi ke-3 untuk memberikan hasil penilaian awal.
          </p>
        </div>
      </div>

    </div>

    </div>


  </div>

  </section>


  <script>
    const slider = document.getElementById('slider');
    const leftBtn = document.getElementById('slideLeft');
    const rightBtn = document.getElementById('slideRight');

    const cardWidth = (402 + 32)/2; 
    rightBtn.onclick = () => slider.scrollBy({ left: cardWidth, behavior: 'smooth' });
    leftBtn.onclick = () => slider.scrollBy({ left: -cardWidth, behavior: 'smooth' });

    function checkButtons() {
      // posisi scroll
      const atStart = slider.scrollLeft <= 0;
      const atEnd = Math.ceil(slider.scrollLeft + slider.clientWidth) >= slider.scrollWidth;


      if (atStart) {
        leftBtn.classList.add("opacity-50", "pointer-events-none");
      } else {
        leftBtn.classList.remove("opacity-50", "pointer-events-none");
      }

      if (atEnd) {
        rightBtn.classList.add("opacity-50", "pointer-events-none");
      } else {
        rightBtn.classList.remove("opacity-50", "pointer-events-none");
      }
    }


    slider.addEventListener('scroll', checkButtons);
    window.addEventListener('load', checkButtons);
  </script>

@endsection
