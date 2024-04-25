<div class="p-4 md:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-2xl dark:border-gray-700 mt-16">

        <div class="flex justify-between items-center">
            <!-- brands header -->
            <div>
                <h1 class="text-2xl font-montsBold text-darkBlue">Data Users</h1>
            </div>
            <!-- Search -->
            <div class="flex items-center gap-2">
                <form class="flex items-center max-w-sm mx-auto">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <input type="search" id="simple-search" class="block p-2.5 pl-5 w-80 z-20 text-sm text-gray-900 border border-mediumBlue rounded-2xl focus:ring-orangePastel focus:border-darkBlue dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Cari Data Lontar" required />
                        <!-- button submit -->
                        <button type="submit" class="absolute rounded-r-2xl top-0 end-0 h-full px-5 p-2.5 text-sm font-medium text-white bg-mediumBlue rounded-e-lg border border-mediumBlue hover:bg-darkBlue focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>

                <!-- Button Tambah Data -->
                <div class="flex items-center">
                    <a href="#">
                        <button type="button" class="text-white bg-mediumBlue hover:bg-darkBlue focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="fa-solid fa-plus"></i> Tambah Data</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm rtl:text-right text-gray-500 dark:text-gray-400 text-center rounded-lg">
                <thead class="text-sm text-white capitalize bg-mediumBlue rounded-lg dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <!-- Table Head -->
                        <th scope="col" class="px-6 py-3">Action</th>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">username</th>
                        <th scope="col" class="px-6 py-3">password</th>
                        <th scope="col" class="px-6 py-3">photo profile</th>
                    </tr>
                </thead>
                <tbody class="font-montsMedium text-mediumBlue">
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                        <td class="w-4 px-5 py-3">
                            <div class="flex gap-2 text-lg text-darkBlue items-center">
                                <button type="button" class="hover:text-danger"><i class="fa-solid fa-trash"></i> </button> |
                                <button type="button" class="hover:text-orangePastel"><i class="fa-solid fa-pen-to-square"></i> </button> |
                                <a href="/DataAdmin/detail"><button type="button" class="hover:text-success"><i class="fa-solid fa-circle-info"></i> </button> </a>
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            I Wayan Kelvin Widana Saputra
                        </th>
                        <td class="px-6 py-4">Admin</td>
                        <td class="px-6 py-4">123Admin</td>
                        <td class="px-6 py-4 flex items-center justify-center"><img src="../../../../public/assets/mypicture.svg" class="w-8 " alt="mypicture" />
                        </td>
                    </tr>
            </table>
        </div>
        <!-- pagination -->
        <nav aria-label="Page navigation example" class="flex justify-end items-center mt-5">
            <ul class="inline-flex -space-x-px text-base h-10 text-darkBlue">
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight  bg-mediumBlue border border-e-0 border-lightBlue rounded-s-lg hover:bg-mediumBlue text-white hover:text-orangePastel dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i class="fa-solid fa-angle-left"></i></a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight  bg-mediumBlue border border-e-0 border-lightBlue hover:bg-mediumBlue text-white hover:text-orangePastel dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight  bg-mediumBlue border border-e-0 border-lightBlue hover:bg-mediumBlue text-white hover:text-orangePastel dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight  bg-mediumBlue border border-e-0 border-lightBlue hover:bg-mediumBlue text-white hover:text-orangePastel dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight  bg-mediumBlue border border-e-0 border-lightBlue rounded-r-lg hover:bg-mediumBlue text-white hover:text-orangePastel dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><i class="fa-solid fa-angle-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>