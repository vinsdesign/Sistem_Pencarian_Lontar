<?php
if (!isset($_SESSION['login'])) {
    header("location : /Login");
    exit;
}

?>
<div class="p-4 md:ml-64">
    <div class="flex justify-center items-center">
        <?php if (isset($success)) : ?>
            <div id="toast-undo" class="flex justify-center items-center absolute z-50 top-0 transition-all  delay-500 w-full max-w-sm p-4 text-gray-500 bg-success rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mt-5" role="alert">
                <div class="text-sm font-normal flex justify-center items-center gap-3">
                    <i class="fa-solid fa-exclamation text-white text-lg "></i>
                    <h1 class="text-white font-montsMedium">Selamat Datang</h1>
                </div>
                <div class="flex items-center ms-auto space-x-2 rtl:space-x-reverse">
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-transparent text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-undo" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-2xl dark:border-gray-700 mt-20">


        <div class="grid grid-rows-2 grid-flow-col gap-3">

            <!-- data profile -->
            <div class="col-span-2 bg-lightSecondary flex items-center justify-between gap-3 px-10 rounded-2xl">
                <div class="flex flex-col justify-between gap-2 ">
                    <h1 class="font-montsMedium text-xl">
                        Om Swastiastu
                        <span class="font-montsBold text-darkBlue">Admin</span>
                    </h1>
                    <p class="text-base text-justify">
                        Ngiring Update Data Lontar malih. Sareng-sareng lestariang budaya
                        Bali, marupa naskah lontar Bali.
                    </p>
                    <div>
                        <a href=""><button type="button" class="py-2 px-5 me-2 mb-2 text-sm font-medium bg-darkBlue text-white focus:outline-none mt-1 rounded-full border border-gray-200 hover:bg-mediumBlue focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                Lihat Profile
                            </button></a>
                    </div>
                </div>
                <img src="../../../../public/assets/mypicture.svg" class="w-48 rounded-full" alt="mypicture" />
            </div>

            <!-- data koleksi -->
            <div class="col-span-2 bg-lightSecondary h-80 rounded-2xl flex justify-center gap-3 items-center flex-col">
                <div class="text-center">
                    <h1 class="font-montsBold text-2xl">Koleksi Data Lontar</h1>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center justify-between gap-3 rounded-full w-[500px] shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] px-10 bg-white py-3">
                        <div class="flex gap-4 items-center">
                            <div class="bg-darkBlue w-10 h-10 flex justify-center items-center rounded-lg">
                                <i class="fa-solid text-2xl text-white fa-database"></i>
                            </div>
                            <div class="flex flex-col">
                                <h1>Gedong Kirtya</h1>
                                <p>Koleksi</p>
                            </div>
                        </div>
                        <h1 class="text-darkBlue text-2xl">80</h1>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center justify-between gap-3 rounded-full w-[500px] shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] px-10 bg-white py-3">
                        <div class="flex gap-4 items-center">
                            <div class="bg-darkBlue w-10 h-10 flex justify-center items-center rounded-lg">
                                <i class="fa-solid text-2xl text-white fa-database"></i>
                            </div>
                            <div class="flex flex-col">
                                <h1>Tidak Teridentifikasi</h1>
                                <p>Koleksi</p>
                            </div>
                        </div>
                        <h1 class="text-darkBlue text-2xl">80</h1>
                    </div>
                </div>

            </div>

            <!-- data asal lontar -->
            <div class="row-span-2 flex flex-col items-center gap-5 px-24 py-2 justify-center rounded-2xl bg-lightSecondary h-[650px] dark:bg-gray-800">
                <div class="text-center">
                    <h1 class="font-montsBold text-xl">Data Lontar</h1>
                    <p class="text-base text-justify text-darkSecondary">
                        Terbanyak Dari Berbagai Daerah
                    </p>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center justify-between gap-3 rounded-full w-96 shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] px-10 bg-white py-3">
                        <div class="flex gap-4 items-center">
                            <div class="bg-darkBlue w-10 h-10 flex justify-center items-center rounded-lg">
                                <i class="fa-solid text-2xl text-white fa-book"></i>
                            </div>
                            <div class="flex flex-col">
                                <h1>Karangasem</h1>
                                <p>Asal</p>
                            </div>
                        </div>
                        <h1 class="text-darkBlue text-2xl">80</h1>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-3 rounded-full shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] w-full px-10 bg-white py-3">
                    <div class="flex gap-4 items-center">
                        <div class="bg-darkBlue w-10 h-10 flex justify-center items-center rounded-lg">
                            <i class="fa-solid text-2xl text-white fa-book"></i>
                        </div>
                        <div class="flex flex-col">
                            <h1>Gianyar</h1>
                            <p>Asal</p>
                        </div>
                    </div>
                    <h1 class="text-darkBlue text-2xl">80</h1>
                </div>
                <div class="flex items-center justify-between gap-3 rounded-full shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] w-full px-10 bg-white py-3">
                    <div class="flex gap-4 items-center">
                        <div class="bg-darkBlue w-10 h-10 rounded-lg flex justify-center items-center">
                            <i class="fa-solid text-2xl text-white fa-book"></i>
                        </div>
                        <div class="flex flex-col">
                            <h1>Singaraja</h1>
                            <p>Asal</p>
                        </div>
                    </div>
                    <h1 class="text-darkBlue text-2xl">80</h1>
                </div>
                <div class="flex items-center justify-between gap-3 rounded-full shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] w-full px-10 bg-white py-3">
                    <div class="flex gap-4 items-center">
                        <div class="bg-darkBlue w-10 h-10 rounded-lg">
                            <i class="fa-solid text-2xl p-2 text-white fa-book"></i>
                        </div>
                        <div class="flex flex-col">
                            <h1>Lombok</h1>
                            <p>Asal</p>
                        </div>
                    </div>
                    <h1 class="text-darkBlue text-2xl">80</h1>
                </div>
                <div class="flex items-center justify-between gap-3 rounded-full shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] w-full px-10 bg-white py-3">
                    <div class="flex gap-4 items-center">
                        <div class="bg-darkBlue w-10 h-10 rounded-lg">
                            <i class="fa-solid text-2xl p-2 text-white fa-book"></i>
                        </div>
                        <div class="flex flex-col">
                            <h1>Klungkung</h1>
                            <p>Asal</p>
                        </div>
                    </div>
                    <h1 class="text-darkBlue text-2xl">80</h1>
                </div>
                <div class="flex items-center justify-between gap-3 rounded-full shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)] w-full px-10 bg-white py-3">
                    <div class="flex gap-4 items-center">
                        <div class="bg-darkBlue w-10 h-10 rounded-lg">
                            <i class="fa-solid text-2xl p-2 text-white fa-book"></i>
                        </div>
                        <div class="flex flex-col">
                            <h1>Bangli</h1>
                            <p>Asal</p>
                        </div>
                    </div>
                    <h1 class="text-darkBlue text-2xl">80</h1>
                </div>
            </div>
        </div>
    </div>
</div>