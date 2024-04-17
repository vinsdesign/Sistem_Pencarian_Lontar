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
  <!-- navbar -->
  <nav class="bg-darkBlue w-ful xxsm:py-2 xxsm:px-5 xsm:py-2 xsm:px-12 sm:py-3 sm:px-16 md:py-3 md:px-16 lg:flex lg:justify-between lg:items-center lg:py-5 lg:px-16">
    <!-- logo -->
    <div class="xxsm:flex xxsm:justify-between xxsm:items-center xsm:flex xsm:justify-between xsm:items-center sm:flex sm:justify-between sm:items-center md:flex md:justify-between md:items-center">
      <a href="#">
        <img class="xxsm:w-24 xsm:w-28 md:w-36" src="./public/assets/Logo.svg" height="70px" alt="logo-lontar" />
      </a>
      <!-- mobile navigation icons -->
      <i class="text-white text-3xl lg:hidden cursor-pointer fa-solid fa-bars" id="humburgerMenu" onclick="menubar">
      </i>
      <i class="fa-solid fa-xmark text-white text-3xl xxsm:hidden xsm:hidden sm:hidden md:hidden lg:hidden cursor-pointer" name="close" id="closeHumburgerMenu" onclick="close"></i>
    </div>
    <!-- menu navigation -->
    <ul id="navigation" class="flex gap-5 xxsm:absolute xxsm:z-10 xxsm:flex-col xxsm:gap-5 xxsm:top-14 xxsm:bg-darkBlue xxsm:left-0 xxsm:px-16 xxsm:py-8 xxsm:hidden xxsm:w-full xsm:absolute xsm:z-10 xsm:flex-col xsm:gap-5 xsm:top-14 xsm:bg-darkBlue xsm:left-0 xsm:px-16 xsm:py-8 xsm:hidden xsm:w-full sm:absolute sm:z-10 sm:flex-col sm:gap-5 sm:top-14 sm:bg-darkBlue sm:left-0 sm:px-16 sm:py-8 sm:hidden sm:w-full md:absolute md:z-10 md:flex-col md:gap-5 md:top-14 md:bg-darkBlue md:left-0 md:px-16 md:py-8 md:hidden md:w-full lg:gap-10 lg:flex lg:px-0 lg:py-0 lg:flex-row lg:justify-center lg:items-center lg:static lg:z-0 text-white lg:bg-transparent lg:w-auto lg:opacity-100 lg:text-base">
      <li class="font-montsMedium">
        <a href="index.html" class="relative active:text-orangePastel border-white duration-500 hover:text-orangePastel">Beranda</a>
      </li>
      <li class="font-montsMedium">
        <a href="Sejarah-Lontar.html" class="hover:text-orangePastel duration-500">Sejarah Lontar</a>
      </li>
      <li class="font-montsMedium">
        <a href="#" class="hover:text-orangePastel duration-500">Koleksi</a>
      </li>
      <li class="font-montsMedium">
        <a href="#" class="hover:text-orangePastel duration-500">Tentang Kami</a>
      </li>
    </ul>
  </nav>
  <!-- end navbar -->

</body>

</html>