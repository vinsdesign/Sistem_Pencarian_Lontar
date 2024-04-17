<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lontar Bali</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body>
    <!-- navbar -->
    <nav
      class="bg-darkBlue w-ful xxsm:py-2 xxsm:px-5 xsm:py-2 xsm:px-12 sm:py-3 sm:px-16 md:py-3 md:px-16 lg:flex lg:justify-between lg:items-center lg:py-3 lg:px-16"
    >
      <!-- logo -->
      <div
        class="xxsm:flex xxsm:justify-between xxsm:items-center xsm:flex xsm:justify-between xsm:items-center sm:flex sm:justify-between sm:items-center md:flex md:justify-between md:items-center"
      >
        <a href="#"
          ><img
            class="w-40 xxsm:w-24 xsm:w-28 md:w-40"
            src="image/Logo.svg"
            height="70px"
            alt="logo-lontar"
        /></a>
        <ion-icon
          class="text-white text-3xl lg:hidden cursor-pointer"
          name="menu"
          id="humburgerMenu"
          onclick="menubar"
        ></ion-icon>
        <ion-icon
          class="text-white text-3xl xxsm:hidden xsm:hidden sm:hidden md:hidden lg:hidden cursor-pointer"
          name="close"
          id="closeHumburgerMenu"
          onclick="close"
        ></ion-icon>
      </div>

      <!-- menu navigation -->
      <ul
        id="navigation"
        class="flex gap-5 xxsm:absolute xxsm:z-10 xxsm:flex-col xxsm:gap-5 xxsm:top-14 xxsm:bg-dark-blue xxsm:left-0 xxsm:px-16 xxsm:py-8 xxsm:hidden xxsm:w-full xsm:absolute xsm:z-10 xsm:flex-col xsm:gap-5 xsm:top-14 xsm:bg-dark-blue xsm:left-0 xsm:px-16 xsm:py-8 xsm:hidden xsm:w-full sm:absolute sm:z-10 sm:flex-col sm:gap-5 sm:top-14 sm:bg-dark-blue sm:left-0 sm:px-16 sm:py-8 sm:hidden sm:w-full md:absolute md:z-10 md:flex-col md:gap-5 md:top-14 md:bg-dark-blue md:left-0 md:px-16 md:py-8 md:hidden md:w-full lg:gap-10 lg:flex lg:px-0 lg:py-0 lg:flex-row lg:justify-center lg:items-center lg:static lg:z-0 text-white lg:bg-transparent lg:w-auto lg:opacity-100 lg:text-lg"
      >
        <li class="font-medium">
          <a
            href="index.html"
            class="relative active:text-orange-pastel border-white duration-500 hover:text-orange-pastel"
            >Beranda</a
          >
        </li>
        <li class="font-medium">
          <a
            href="Sejarah-Lontar.html"
            class="hover:text-orange-pastel duration-500"
            >Sejarah Lontar</a
          >
        </li>
        <li class="font-medium">
          <a href="#" class="hover:text-orange-pastel duration-500">Koleksi</a>
        </li>
        <li class="font-medium">
          <a href="#" class="hover:text-orange-pastel duration-500"
            >Tentang Kami</a
          >
        </li>
      </ul>
    </nav>
    <!-- end navbar -->
</body>
</html>