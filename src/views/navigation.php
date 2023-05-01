<nav
    class="fixed top-0 left-0 z-50 h-16 w-full bg-turquoise-100 border-turquoise-200 dark:bg-turquoise-950 dark:border-turquoise-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <img src="https://bontomasila.desa.id/desa/logo/Bulukumba_100x100__sid__QlgwPX4.png" class="h-8 mr-3"
                 alt="Sako Logo"/>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sako</span>
        </a>

        <div class="flex items-center">
            <!-- Dark mode switcher -->
            <button id="theme-toggle" type="button"
                    class="text-turquoise-500 dark:text-turquoise-400 hover:bg-turquoise-50 dark:hover:bg-turquoise-800 focus:outline-none focus:ring-4 focus:ring-turquoise-200 dark:focus:ring-turquoise-700 rounded-lg text-sm p-2.5 lg:hidden">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>

            <!-- Mobile menu button -->
            <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 text-sm text-turquoise-500 rounded-lg lg:hidden hover:bg-turquoise-100 focus:outline-none focus:ring-2 focus:ring-turquoise-200 dark:text-turquoise-400 dark:hover:bg-turquoise-700 dark:focus:ring-turquoise-600"
                    aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- menu -->
        <div class="hidden w-full lg:block lg:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 lg:p-0 mt-4 border border-turquoise-200 rounded-lg bg-turquoise-50 lg:flex-row lg:space-x-8 lg:mt-0 lg:border-0 lg:bg-turquoise-100 dark:bg-turquoise-800 lg:dark:bg-turquoise-950 dark:border-turquoise-700">
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Profil Desa
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Pemerintahan Desa
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Data Desa
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Regulasi
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Peta
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        SGDs
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        IDM
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Galeri
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Pengaduan
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 pl-3 pr-4 text-turquoise-900 rounded hover:bg-turquoise-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-turquoise-700 lg:p-0 dark:text-white lg:dark:hover:text-turquoise-500 dark:hover:bg-turquoise-700 dark:hover:text-white lg:dark:hover:bg-transparent">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
