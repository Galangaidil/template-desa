<section>
    <div class="mx-auto max-w-screen-xl px-4 py-6 lg:py-8">
        <h3 class="text-3xl font-bold dark:text-white mb-6">Pengaduan</h3>

        <div class="flex flex-wrap flex-col lg:flex-row justify-start items-center gap-4">
            <!-- Trigger pengaduan form -->
            <button id="open-modal-pengaduan"
                    class="w-full lg:w-auto inline-flex items-center px-3 py-2.5 text-sm font-medium text-center text-white dark:text-black bg-turquoise-600 rounded-lg hover:bg-turquoise-700 focus:ring-4 focus:outline-none focus:ring-turquoise-300 dark:bg-turquoise-400 dark:hover:bg-turquoise-500 dark:focus:ring-turquoise-800">
                Formulir pengaduan
            </button>

            <!-- Filter by status -->
            <form action="#" method="get" class="w-full lg:w-auto">
                <label for="status" class="sr-only">Pilih status pengaduan</label>

                <select id="status" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-turquoise-500 focus:border-turquoise-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-turquoise-500 dark:focus:border-turquoise-500">
                    <option selected disabled>Pilih status</option>
                    <option value="semua">Semua</option>
                    <option value="Menunggu Diproses">Menunggu Diproses</option>
                    <option value="Sedang Diproses">Sedang Diproses</option>
                    <option value="selesai">Selesai</option>
                </select>
            </form>

            <!--cari pengaduan-->
            <form action="#" method="get" class="w-full">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                           class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-turquoise-500 focus:border-turquoise-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-turquoise-500 dark:focus:border-turquoise-500"
                           placeholder="Cari pengaduan..." required>
                    <button type="submit"
                            class="text-white dark:text-black absolute right-2.5 bottom-2.5 bg-turquoise-600 hover:bg-turquoise-700 focus:ring-4 focus:outline-none focus:ring-turquoise-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-turquoise-400 dark:hover:bg-turquoise-500 dark:focus:ring-turquoise-800">
                        Cari
                    </button>
                </div>
            </form>
        </div>

        <dialog id="modal-pengaduan" class="max-w-xl w-full rounded dark:bg-gray-900">
            <h3 class="text-xl font-bold dark:text-white mb-6">Formulir Pengaduan</h3>

            <p class="text-gray-500 dark:text-gray-400">
                Isi formulir pengaduan di bawah ini.
            </p>

            <!-- wajib diisi-->
            <p class="text-gray-500 dark:text-gray-400">
                <span class="text-red-500">*</span> Wajib diisi.
            </p>

            <form action="#" method="post">
                <!-- NIK -->
                <div class="mt-4">
                    <label for="nik" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        NIK *
                    </label>
                    <div class="mt-1">
                        <input type="text" name="nik" id="nik" required
                               class="shadow-sm focus:ring-turquoise-500 focus:border-turquoise-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300">
                    </div>
                </div>

                <!-- Name -->
                <div class="mt-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Nama *
                    </label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" autocomplete="name" required
                               class="shadow-sm focus:ring-turquoise-500 focus:border-turquoise-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300">
                    </div>
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Email
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email"
                               class="shadow-sm focus:ring-turquoise-500 focus:border-turquoise-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300">
                    </div>
                </div>

                <!-- Phone -->
                <div class="mt-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Nomor Telepon *
                    </label>
                    <div class="mt-1">
                        <input type="tel" name="phone" id="phone" autocomplete="tel" required
                               class="shadow-sm focus:ring-turquoise-500 focus:border-turquoise-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300">
                    </div>
                </div>

                <!-- Judul -->
                <div class="mt-4">
                    <label for="judul" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Judul *
                    </label>
                    <div class="mt-1">
                        <input type="text" name="judul" id="judul" required
                               class="shadow-sm focus:ring-turquoise-500 focus:border-turquoise-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300">
                    </div>
                </div>

                <!-- Isi -->
                <div class="mt-4">
                    <label for="isi" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Isi *
                    </label>
                    <div class="mt-1">
                        <textarea id="isi" name="isi" rows="3" required
                                  class="shadow-sm focus:ring-turquoise-500 focus:border-turquoise-500 block w-full sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:text-gray-300"></textarea>
                    </div>
                </div>

                <!-- Lampiran -->
                <div class="mt-4">
                    <label for="lampiran" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Lampiran
                    </label>
                    <div class="mt-1">
                        <input type="file" name="lampiran" id="lampiran"
                               class="block w-full text-sm text-slate-500 dark:text-turquoise-400
                                      file:mr-4 file:py-2 file:px-4
                                      file:rounded-full file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-turquoise-50 file:text-turquoise-700 dark:file:text-turquoise-900
                                      hover:file:bg-turquoise-100 dark:file:bg-turquoise-400 hover:dark:file:bg-turquoise-500"
                               accept=".png, .jpg, .jpeg">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                            PNG, JPG atau JPEG (MAX. 2MB).
                        </p>
                    </div>
                </div>

                <!-- tombol cancel dan submit -->
                <div class="mt-4 flex justify-end">
                    <button type="button" id="close-modal-pengaduan" formmethod="dialog"
                            class="px-4 py-2 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-turquoise-500">
                        Cancel
                    </button>
                    <button type="submit"
                            class="ml-4 px-4 py-2 rounded-md text-sm font-medium text-white dark:text-black bg-turquoise-500 hover:bg-turquoise-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-turquoise-500">
                        Submit
                    </button>
                </div>
            </form>
        </dialog>

        <!-- TODO: list pengaduan -->

        <!-- TODO: Detail pengaduan -->
    </div>
</section>

<script>
    // Get the modal
    const modal = document.getElementById("modal-pengaduan");

    // Get the button that opens the modal
    const btn = document.getElementById("open-modal-pengaduan");

    // Get the button that closes the modal
    const closeBtn = document.getElementById("close-modal-pengaduan");

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.showModal();
    }

    // When the user clicks on <span> (x), close the modal
    closeBtn.onclick = function () {
        modal.close();
    }
</script>