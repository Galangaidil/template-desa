<section>
    <div class="mx-auto max-w-screen-xl px-4 py-6 lg:py-8">
        <h3 class="text-3xl font-bold dark:text-white mb-6">Galeri Desa</h3>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg"
                     src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt=""
                     onclick="showModalImage(this.src)">
            </div>
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
            <div>
                <img class="h-auto max-w-full rounded-lg"
                     src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt=""
                     onclick="showModalImage(this.src)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                     src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt=""
                     onclick="showModalImage(this.src)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                     src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt=""
                     onclick="showModalImage(this.src)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                     src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt=""
                     onclick="showModalImage(this.src)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                     src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt=""
                     onclick="showModalImage(this.src)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                     src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt=""
                     onclick="showModalImage(this.src)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg"
                     src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt=""
                     onclick="showModalImage(this.src)">
            </div>
        </div>

        <dialog id="modal-image">
            <img class="h-auto max-w-full rounded-lg"
                 src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="" id="image-container">
            <!-- close button -->
            <button id="close-modal-image"
                    class="absolute right-0 top-0 p-3 m-3 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400 focus:outline-none focus:ring-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </dialog>
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
    }

    // close modal
    closeModalButton.addEventListener('click', () => {
        dialog.close();
    });
</script>
