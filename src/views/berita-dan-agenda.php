<section class="max-w-screen-xl mx-auto px-4 py-6 lg:py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Berita -->
        <div class="col-span-1 md:col-span-2">

            <!-- Judul -->
            <div class="flex justify-between items-center mb-6">
                <h4 class="text-2xl font-bold dark:text-white">Kabar Terkini</h4>

                <a href="#"
                   class="text-turquoise-600 dark:text-turquoise-400 font-light uppercase text-xs hover:underline">
                    Lihat Semua
                </a>
            </div>

            <!-- Berita, diloop sebanyak 5 kali. -->
            <div class="grid grid-cols-1">
                <!-- Loop berita 5 kali -->
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <div class="flex space-x-4">
                        <!-- Gambar Berita -->
                        <div class="w-1/3">
                            <img class="rounded" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt=""/>
                        </div>

                        <!-- Judul, katergori, dan waktu -->
                        <div class="w-2/3">
                            <h5 class="text-base md:text-xl font-bold dark:text-white">
                                Prakiraan Cuaca di Bogor Hari Ini, 7 Juni 2023: Pagi Cerah Berawan, Sore Hujan Sedang
                            </h5>

                            <div class="flex justify-start space-x-2 mt-2">
                                <span
                                        class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                                    Bola
                                </span>

                                <time class="text-sm font-normal leading-none text-gray-400 dark:text-gray-500 p-0.5">
                                    25 Mei 2023, 15:04 WIB
                                </time>
                            </div>
                        </div>
                    </div>

                    <!-- Separator -->
                    <div class="w-full border-b border-gray-200 dark:border-gray-700 my-5"></div>
                <?php endfor; ?>
            </div>

            <!-- Jika beritanya masih kosong -->
            <div class="flex justify-center items-center h-64">
                <p class="text-gray-400 dark:text-gray-500 font-light text-xl">Belum ada berita terbaru.</p>
            </div>
        </div>

        <!-- Agenda -->
        <div class="col-span-1">
            <!-- Judul -->
            <div class="flex justify-between items-center mb-6">
                <h4 class="text-2xl font-bold dark:text-white">Agenda Kegiatan</h4>
                <a href="#"
                   class="text-turquoise-600 dark:text-turquoise-400 font-light uppercase text-xs hover:underline">
                    Lihat Semua
                </a>
            </div>

            <!-- Agendanya, diloop sebanyak 5 kali -->
            <ol class="relative border-l border-turquoise-200 dark:border-turquoise-700 max-w-xl">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <li class="mb-10 ml-4">
                        <div
                                class="absolute w-3 h-3 bg-turquoise-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-turquoise-900 dark:bg-turquoise-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                            Juli 2023
                        </time>
                        <h3 class="text-lg font-semibold text-turquoise-900 dark:text-white">
                            Pelaksanaan Musyawarah Desa untuk penyusunan RKPDes
                        </h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+
                            pages
                            including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce &
                            Marketing
                            pages.</p>
                    </li>
                <?php endfor; ?>
            </ol>

            <!-- Jika agendanya masih kosong -->
            <div class="flex justify-center items-center h-64">
                <p class="text-gray-400 dark:text-gray-500 font-light text-xl">Belum ada Agenda</p>
            </div>
        </div>
    </div>
</section>