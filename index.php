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
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
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
  </main>
  <!-- end main content -->









  <script src="./js/menuNavbar.js"></script>
  <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>