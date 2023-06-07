<section>
    <!-- Dialog kaya modal buat nampilin gambar -->
    <dialog id="modal-image" class="rounded backdrop-blur-sm bg-white/30 dark:bg-black/30">
        <img class="h-auto max-w-full rounded-lg" src="" alt="" id="image-container">
        <!-- close button -->
        <button id="close-modal-image"
            class="absolute right-0 top-0 p-3 m-3 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:dark:ring-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </dialog>

    <div class="mx-auto max-w-screen-xl px-4 py-6 lg:py-8">
        <!-- Judul -->
        <div class="flex justify-between items-center mb-6">
            <h4 class="text-2xl font-bold dark:text-white">Galeri</h4>
            <a href="#" class="text-turquoise-600 dark:text-turquoise-400 font-light uppercase text-xs hover:underline">
                Lihat Semua
            </a>
        </div>

        <!-- Gambarnya ada 4 -->
        <div class="grid grid-cols-2 gap-2">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt=""
                    onclick="showModalImage(this.src)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt=""
                    onclick="showModalImage(this.src)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt=""
                    onclick="showModalImage(this.src)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt=""
                    onclick="showModalImage(this.src)">
            </div>
        </div>

        <!-- Jika galeri nya kosong -->
        <div class="flex justify-center items-center h-64">
            <p class="text-gray-400 dark:text-gray-500 font-light text-xl">Belum ada galeri</p>
        </div>
    </div>

</section>

<script>
    // get all required elements
    const dialog = document.getElementById('modal-image');
    const closeModalButton = document.getElementById('close-modal-image');
    const imageContainer = document.getElementById('image-container');

    // add event listeners
    function showModalImage(src) {
        // set image src to modal
        imageContainer.src = src;

        // show modal
        dialog.showModal();

        dialog.addEventListener('click', (event) => {
            if (event.target === dialog) {
                dialog.close();
            }
        })
    }

    // close modal
    closeModalButton.addEventListener('click', () => {
        dialog.close();
    });
</script>