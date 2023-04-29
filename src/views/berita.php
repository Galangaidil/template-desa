<section>
    <div class="mx-auto max-w-screen-xl px-4 py-6 lg:py-8">
        <h3 class="text-3xl font-bold dark:text-white mb-6">Berita dan Pengumuman</h3>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <?php for ($i = 0; $i < 9; $i++) : ?>
                <div
                    class="max-w-sm bg-white border border-turquoise-200 rounded-lg shadow dark:bg-turquoise-950 dark:border-turquoise-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt=""/>
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Judul berita.
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Cuplikan kata-kata dari sebuah berita in reverse chronological order.
                        </p>
                        <a href="#"
                           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white dark:text-black bg-turquoise-600 rounded-lg hover:bg-turquoise-700 focus:ring-4 focus:outline-none focus:ring-turquoise-300 dark:bg-turquoise-400 dark:hover:bg-turquoise-500 dark:focus:ring-turquoise-800">
                            Selengkapnya
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
