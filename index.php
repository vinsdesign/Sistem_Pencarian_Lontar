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
  <nav class="bg-darkBlue flex justify-between items-center px-7 py-5">
    <!-- logo -->
    <div class="">
      <img class="h-8 w-auto" src="./public/assets/Logo.svg" alt="logo">
    </div>
    <!-- menu navigation -->
    <div id="navigation" class="md:static md:min-h-fit absolute md:w-auto bg-darkBlue min-h-[20vh] left-0 top-[-100%] w-full flex items-center pl-6">
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
  <script src="./js/menuNavbar.js">

  </script>
</body>

</html>