<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lontar Bali</title>
  <link rel="stylesheet" href="./src/output.css">
  <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body class="font-montserrat">
  <header>
    <!-- navbar -->
    <nav class="bg-darkBlue flex justify-between items-center px-7 py-5">
      <!-- logo -->
      <div class="flex items-center">
        <img class="h-9 w-auto" src="./public/assets/Logo.svg" alt="logo">
      </div>
      <!-- menu navigation -->
      <div id="navigation" class="md:static md:min-h-fit absolute md:w-auto z-50 bg-darkBlue min-h-[20vh] left-0 top-[-100%] w-full flex items-center pl-6">
        <ul class="text-white font-montsMedium flex md:flex-row flex-col md:items-center md:py-0 md:gap-10 gap-6 py-3">
          <li><a class="hover:text-orangePastel" href="#">Beranda</a></li>
          <li><a class="hover:text-orangePastel" href="#">Sejarah Lontar</a></li>
          <li><a class="hover:text-orangePastel" href="#">Koleksi Lontar</a></li>
          <li><a class="hover:text-orangePastel" href="#">Tentang Kami</a></li>
        </ul>
      </div>
      <div id="add" class="md:hidden">
        <i class="text-2xl fa-solid fa-bars  text-orangePastel cursor-pointer"></i>
      </div>
      <div id="close" class="hidden">
        <i class="text-2xl fa-solid fa-xmark  text-orangePastel cursor-pointer"></i>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- search component -->
    <section class="flex flex-col justify-center items-center absolute z-50 xxsm:-translate-x-1/2 xxsm:-translate-y-60 xsm:-translate-y-50 base:-translate-y-48 sm:-translate-y-48 md:-translate-y-36 lg:-translate-y-40 xxsm:top-1/2 xxsm:left-1/2">
      <h1 class="text-white xl:mb-3 font-medium xxsm:text-sm xsm:text-lg sm:text-xl md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl xxsm:mb-0">
        Mulai Eksplorasi
        <span class="font-montsBold text-orangePastel">Pencarian Lontar</span>
      </h1>
      <form action="" class="">
        <div class="flex m-0 drop-shadow-[1px_4px_43.4px_rgba(0,0,0,0.50)]">
          <div class="relative flex items-center text-lightSecondary focus-within:text-mediumBlue">
            <i class="fa-solid fa-magnifying-glass absolute xxsm:text-base lg:text-xl 2xl:text-2xl xxsm:mt-2 xxsm:ml-3 mt-5 ml-5 text-mediumBlue" name="search"></i>
            <input type="text" placeholder="Cari Lontar" name="cari" autocomplete="off" aria-label="Cari Lontar" class="mt-5 xxsm:mt-2 xxsm:pl-12 px-16 placeholder-darkSecondary focus:placeholder-lightBlue xxsm:w-[200px] xxsm:h-9 sm:text-xl xsm:w-[250px] xsm:h-9 sm:w-[350px] sm:h-10 md:text-xl lg:text-2xl md:w-[300px] md:h-[50px] lg:w-[400px] lg:h-[55px] xl:w-[500px] xl:h-[60px] 2xl:w-[700px] 2xl:h-[70px] rounded-s-[15px] border-none ring-2 ring-mediumBlue focus:ring-orangePastel focus:ring-2" />
          </div>
          <button type="submit" class="bg-mediumBlue xxsm:mt-2 xxsm:text-base sm:px-3 xsm:text-lg xxsm:px-3 xsm:px-3 sm:text-xl md:text-2xl xl:text-3xl md:w-[100px] md:h-[50px] lg:w-[110px] lg:h-[55px] xl:w-[120px] xl:h-[60px] 2xl:w-[120px] 2xl:h-[70px] mt-5 text-orangePastel text-[24px] rounded-r-[15px] ring-2 ring-mediumBlue">
            Cari
          </button>
        </div>
      </form>
    </section>
    <!-- carousel image -->
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative xxsm:h-56 base:h-60 sm:h-72 md:h-[25rem] lg:h-96 overflow-hidden xl:h-[30rem] 2xl:h-[35rem]">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./public/assets/bg-header(1).jpg" class="absolute block w-full lg:-translate-x-1/2 lg:-translate-y-1/2 lg:top-1/2 lg:left-1/2 bg-cover xxsm:h-[210px] xsm:h-[240px] base:h-[290px] sm:h-[300px] md:h-[500px] lg:h-[500px] xl:h-[600px] 2xl:h-[800px]" alt="bg-header1" />
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./public/assets/bg-header(2).jpg" class="absolute block w-full lg:-translate-x-1/2 lg:-translate-y-1/2 lg:top-1/2 lg:left-1/2 bg-cover xxsm:h-[210px] xsm:h-[240px] base:h-[290px] sm:h-[300px] md:h-[500px] lg:h-[500px] xl:h-[600px] 2xl:h-[800px]" alt="bg-header2" />
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./public/assets/bg-header(3).jpg" class="absolute block w-full lg:-translate-x-1/2 lg:-translate-y-1/2 lg:top-1/2 lg:left-1/2 bg-cover xxsm:h-[210px] xsm:h-[240px] base:h-[290px] sm:h-[300px] md:h-[500px] lg:h-[500px] xl:h-[600px] 2xl:h-[800px]" alt="bg-header3" />
        </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute xxsm:hidden base:block top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute xxsm:hidden base:block  top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>
    <!-- end carousel image -->
  </header>

  <!-- main content -->
  <main>
    <section>
      <h1 class="text-center xxsm:text-base xsm:text-lg sm:text-xl md:text-xl lg:text-2xl xl:text-3xl font-montsBold text-darkBlue text-[30px] sm:mt-5 mt-10">
        Informasi Data Lontar
      </h1>
      <p class="text-center text-darkSecondary xxsm:text-sm xsm:text-base sm:text-lg md:text-lg lg:text-xl xl:text-2xl">
        Berikut informasi lengkap terkait data lontar
      </p>
      <div class="flex xxsm:flex-col xsm:flex-col xxsm:gap-3 xsm:gap-5 sm:flex-col sm:gap-5 md:flex-col lg:flex-row justify-center items-center mt-5 md:gap-5 gap-16">
        <a href="#">
          <section class="bg-darkBlue text-center p-4 xxsm:w-[280px] xsm:w-[450px] sm:w-[500px] md:w-[500px] lg:w-[300px] xl:w-[350px] 2xl:w-[380px] text-white hover:text-orangePastel flex flex-col items-center">
            <i class="fa-solid fa-database text-[150px]"></i>
            <p class="text-white text-lg hover:text-orangePastel py-1 duration-500">
              <span class="font-montsBold">35</span> Data Lontar Terdigitalisasi
            </p>
          </section>
        </a>
        <a href="#">
          <section class="bg-darkBlue text-center p-4 xxsm:w-[280px] xsm:w-[450px] sm:w-[500px] md:w-[500px] lg:w-[300px] xl:w-[350px] 2xl:w-[380px] text-white hover:text-orangePastel flex flex-col items-center">
            <i class="fa-solid fa-book text-[150px]"></i>
            <p class="text-white text-lg hover:text-orangePastel py-1 duration-500">
              <span class="font-montsBold">7</span> Data Lontar Terklasifikasi
            </p>
          </section>
        </a>
        <a href="#">
          <section class="bg-darkBlue text-center p-4 xxsm:w-[280px] xsm:w-[450px] sm:w-[500px] md:w-[500px] lg:w-[300px] xl:w-[350px] 2xl:w-[380px]  text-white hover:text-orangePastel flex flex-col items-center">
            <i class="fa-solid fa-bookmark text-[150px]"></i>
            <p class="text-white text-lg hover:text-orangePastel py-1 duration-500">
              <span class="font-montsBold">35</span> Data Lontar Tersimpan
            </p>
          </section>
        </a>
      </div>
    </section>
    <!-- end informasi Data Lontar -->
    <!-- sejarah lontar -->
    <section class="mt-10">
      <h1 class="text-center xxsm:text-lg sm:text-xl md:text-xl lg:text-2xl xl:text-3xl font-bold text-darkBlue xxsm:mt-10 mt-16">
        Sejarah Aksara Bali Yang ditulis di Daun Lontar
      </h1>
      <p class="mt-1 text-center xxsm:text-base xsm:text-sm xsm:px-3 sm:text-base md:text-lg lg:text-xl xl:text-xl text-darkSecondary">
        Berikut informasi lengkap terkait Sejarah Aksara Bali Yang ditulis di Daun Lontar.
      </p>
      <div class="flex xxsm:flex-wrap xsm:flex-wrap xsm:gap-3 sm:flex-wrap md:flex-wrap lg:flex-nowrap justify-center mt-4 xxsm:gap-2 md:gap-5 gap-10 lg:px-10">
        <p class="xxsm:w-[280px] xsm:w-[450px] sm:w-[500px] md:w-[600px] lg:w-[400px] xl:w-[600px] 2xl:w-[500px] md:text-xl lg:text-lg xl:text-xl text-justify xxsm:text-base xxsm:leading-7 leading-10 xxsm:order-2 xsm:order-2 sm:order-2 md:order-2 lg:order-1">
          Aksara Bali merupakan turunan dari aksara Brahmi India melalui perantara aksara Kawi dan
          berkerabat dekat dengan aksara Jawa. Aksara Bali aktif digunakan dalam sastra maupun tulisan
          sehari-hari masyarakat Bali sejak pertengahan abad ke-15 hingga kini dan masih diajarkan di
          Bali sebagai bagian dari muatan lokal, meski penerapannya dalam kehidupan sehari-hari telah
          berkurang
          <a href="https://instiki.ac.id/2021/11/19/sejarah-aksara-bali-yang-ditulis-di-daun-lontar/" class="text-orangePastel">Selengkapnya</a>.
        </p>
        <img src="../public/assets/Tulis_Lontar.jpg" class="xxsm:w-[280px] xsm:w-[450px] sm:w-[500px] lg:w-[500px] md:w-[600px] xl:w-[400px] 2xl:w-[450px] xsm:order-1 xxsm:order-1 sm:order-1 md:order-1 lg:order-2" alt="Tulis-lontar" />
      </div>
    </section>
  </main>
  <!-- end main content -->

  <!-- Footer -->
  <footer class="w-full bg-darkBlue xxsm:px-4 xsm:px-8 sm:px-12 px-16 py-8 mt-16 text-white">
    <a href="#beranda">
      <LogoIcon />
    </a>
    <div class="flex justify-between flex-wrap lg:justify-between lg:gap-5 xl:justify-between 2xl:flex 2xl:justify-between gap-3">
      <section class="">
        <h1 class="xxsm:text-lg lg:text-xl font-bold hover:text-orangePastel duration-500">
          Naskah Lontar
        </h1>
        <p class="2xl:w-[500px] xl:w-[400px] lg:w-[250px] lg:text-lg xxsm:text-base text-justify">
          Website Lontar Bali merupakan website mesin pencari naskah lontar Bali yang digunakan
          untuk pelestarian dalam bentuk digitalisasi budaya.
        </p>
      </section>
      <section class="">
        <h1 class="text-xl font-bold xxsm:text-lg lg:text-xl hover:text-orangePastel duration-500">
          Kontak
        </h1>
        <div class="flex items-center gap-2 mt-1 hover:text-orangePastel duration-500">
          <font-awesome-icon icon="fa-solid fa-envelope" class="xxsm:h-4 xxsm:w-4 lg:h-5 lg:w-5" />
          <a href="#">
            <p class="font-medium xxsm::text-base lg:text-lg">Lontarbali@email.com</p>
          </a>
        </div>
        <div class="flex items-start mt-4 gap-2 hover:text-orangePastel duration-500">
          <font-awesome-icon icon="fa-solid fa-map-pin" class="xxsm:h-4 xxsm:w-4 lg:h-5 lg:w-5" />
          <a href="#">
            <p class="xxsm::text-base lg:text-lg font-medium xxsm:w-[260px] lg:w-[400px]">
              Jl. Veteran, Paket Agung, Kec. Buleleng, Kabupaten Buleleng, Bali 81118
            </p>
          </a>
        </div>
      </section>
      <section class="">
        <h1 class="text-lg lg:text-xl text-left font-bold hover:text-orangePastel duration-500">
          Partner Kami
        </h1>
        <a href="https://instiki.ac.id/">
          <LogoInstiki Color="000" />
        </a>
      </section>
    </div>
    <p class="text-center mt-8 xxsm:text-base hover:text-orangePastel duration-500">
      Copyright © 2023. By Mahasiswa INSTIKI
    </p>
  </footer>
  <!-- Footer -->

  <script src="./js/menuNavbar.js"></script>
  <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>