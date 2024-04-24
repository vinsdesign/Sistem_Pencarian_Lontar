<div class="p-4 md:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-2xl dark:border-gray-700 mt-16">

        <div class="flex justify-between items-center">
            <!-- brands header -->
            <div>
                <h1 class="text-2xl font-montsBold text-darkBlue">Data Lontar</h1>
            </div>
            <!-- Search -->
            <form class="flex items-center max-w-sm mx-auto">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search branch name" required />
                </div>
                <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-2">
            <table class="w-full text-sm rtl:text-right text-gray-500 dark:text-gray-400 text-center rounded-lg">
                <thead class="text-sm text-white capitalize bg-darkBlue rounded-lg dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <!-- Table Head -->
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-orangePastel bg-gray-100 border-gray-300 rounded focus:ring-orangePastel dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">Title</th>
                        <th scope="col" class="px-6 py-3">Type</th>
                        <th scope="col" class="px-6 py-3">Penulis</th>
                        <th scope="col" class="px-6 py-3">Subject</th>
                        <th scope="col" class="px-6 py-3">Klasifikasi</th>
                        <th scope="col" class="px-6 py-3">Bahasa</th>
                        <th scope="col" class="px-6 py-3">Collaction</th>
                        <th scope="col" class="px-6 py-3">Tahun Lontar</th>
                        <th scope="col" class="px-6 py-3">Panjang Lontar</th>
                        <th scope="col" class="px-6 py-3">Lebar Lontar</th>
                        <th scope="col" class="px-6 py-3">Nama Tempat</th>
                        <th scope="col" class="px-6 py-3">Lokasi Penyimpanan</th>
                        <th scope="col" class="px-6 py-3">Asal</th>
                        <th scope="col" class="px-6 py-3">Resource</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-1" type="checkbox" class="w-4 h-4 text-orangePastel bg-gray-100 border-gray-300 rounded focus:ring-orangePastel dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                                <label for="checkbox-all-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Bhasma
                        </th>
                        <td class="px-6 py-4">Daun Ronta</td>
                        <td class="px-6 py-4">Pedanda Anyar</td>
                        <td class="px-6 py-4">Mantra</td>
                        <td class="px-6 py-4">Weda</td>
                        <td class="px-6 py-4">Bahasa Kawi</td>
                        <td class="px-6 py-4">25</td>
                        <td class="px-6 py-4">1962</td>
                        <td class="px-6 py-4">50 cm</td>
                        <td class="px-6 py-4">3.5 cm</td>
                        <td class="px-6 py-4">Gedong Kirtya</td>
                        <td class="px-6 py-4">Jalan Veteran No 20, Singaraja</td>
                        <td class="px-6 py-4">Belah Batuh, Gianyar</td>
                        <td class="px-6 py-4">
                            <img src="../../../../public/assets/bg-header(1).jpg" alt="" />
                        </td>
                    </tr>
            </table>
        </div>
    </div>
</div>