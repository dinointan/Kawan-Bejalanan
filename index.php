<?php
include 'config/koneksi.php';

$query = mysqli_query($db, "SELECT * FROM wisata");
$wisatas = mysqli_fetch_all($query, MYSQLI_ASSOC);

include 'layout/header.php';
include 'layout/navbar.php';
?>

<section>
    <section class="bg-center bg-no-repeat bg-[url('assets/image/hero.png')]">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-7xl">
                SELAMAT DATANG DI WEBSITE "KAWAN BEJALANAN"</h1>
            <h2 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-4xl">
                Agen Perjalanan Wisata Kalimantan Selatan </h2>
            <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 lg:px-48">"Kalimantan Selatan
                merupakan kota seribu sungai yang memiliki berbagai destinasi wisata mulai dari wisata budaya sampai
                wisata alam. Ayo berwisata ke Kalimantan Selatan bersama Kawan Bejalanan."</p>
        </div>
    </section>

</section>

<section class="pt-[31px] px-[93px]">
    <h2 class="font-bold text-3xl">Telusuri Wisata !</h2>
    <div class="flex justify-between items-center">
        <form class="w-[368px] max-w-md mt-3">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari Semua Wisata" required />
            </div>
        </form>
        <form class="w-[368px] max-w-md mt-3">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari Semua Wisata" required />
            </div>
        </form>
        <button type="button"
            class="text-white bg-[#95E681] hover:bg-[#77ed5a] focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Cari</button>
    </div>
</section>

<section class="pt-[40px] px-[93px]">
    <h2 class="font-bold text-3xl underline underline-offset-4 text-center">Wisata Terpopuler</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-[76px] mt-10">
        <?php foreach ($wisatas as $wisata): ?>
            <a href="/wisata/detail.php?id=<?= $wisata['id'] ?>" class="bg-[#95E681] h-full flex flex-col rounded-lg">
                <img class="h-auto w-full rounded-t-lg flex-grow object-cover" src="/assets/image/<?= $wisata['gambar'] ?>"
                    alt="Foto Pantai Teluk Tamiangx">
                <p class="p-2 text-center font-bold text-xl text-white"><?= $wisata['nama'] ?></p>
            </a>
        <?php endforeach; ?>
    </div>

</section>

<section class="pt-[40px] px-[93px]">
    <h2 class="font-bold text-3xl underline underline-offset-4 text-center">Paket Wisata</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-[76px] mt-10">
        <div class="bg-[#95E681] h-full flex flex-col rounded-lg">
            <img class="h-auto w-full rounded-t-lg flex-grow object-cover" src="/assets/image/pantai_teluk_tamiang.png"
                alt="Foto Pantai Teluk Tamiang">
            <p class="p-2 text-center font-bold text-xl text-white">Pantai Teluk Tamiang</p>
        </div>
        <div class="bg-[#95E681] h-full flex flex-col rounded-lg">
            <img class="h-auto w-full rounded-t-lg flex-grow object-cover" src="/assets/image/siring.png"
                alt="Foto Pantai Teluk Tamiang">
            <p class="p-2 text-center font-bold text-xl text-white">Taman Siring 0 KM</p>
        </div>
        <div class="bg-[#95E681] h-full flex flex-col rounded-lg">
            <img class="h-auto w-full rounded-t-lg flex-grow object-cover" src="/assets/image/pantai_teluk_tamiang.png"
                alt="Foto Pantai Teluk Tamiangx">
            <p class="p-2 text-center font-bold text-xl text-white">Pantai Teluk Tamiang</p>
        </div>
    </div>

    <div class="flex justify-center w-full mt-8">
        <button type="button"
            class="text-white bg-[#95E681] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Selengkapnya</button>
    </div>
</section>

<section class="border-t-2 border-black mt-8 flex justify-center">
    <div class="flex flex-col justify-center items-center px-20 w-1/2 border-r-[1px] border-black mt-10">
        <h2 class="font-bold text-3xl underline underline-offset-4 text-center">Berita Terbaru</h2>
        <iframe class="mt-4" width="560" height="315"
            src="https://www.youtube.com/embed/1spIPIOFoR4?si=4_Dxtm9Yq9XSPotl" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h2 class="font-bold text-3xl underline underline-offset-4 text-center mt-20">Tentang Kami</h2>
        <ul class="self-start space-y-1 text-gray-500 list-inside dark:text-gray-400 mt-8">
            <li class="flex items-center space-x-2">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.625 17.8125V4.75H13.0625V1.1875H2.375V17.8125H0V19H8.3125V15.4375H10.6875V19H19V17.8125H16.625ZM7.125 13.0625H4.75V10.6875H7.125V13.0625ZM7.125 9.5H4.75V7.125H7.125V9.5ZM7.125 5.9375H4.75V3.5625H7.125V5.9375ZM10.6875 13.0625H8.3125V10.6875H10.6875V13.0625ZM10.6875 9.5H8.3125V7.125H10.6875V9.5ZM10.6875 5.9375H8.3125V3.5625H10.6875V5.9375ZM15.4375 13.0625H13.0625V10.6875H15.4375V13.0625ZM15.4375 9.5H13.0625V7.125H15.4375V9.5Z"
                        fill="#95E681" />
                </svg>

                <p>PT. Sumber Wisata Kita</p>
            </li>
            <li class="flex items-center space-x-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5ZM12 2C10.1435 2 8.36301 2.7375 7.05025 4.05025C5.7375 5.36301 5 7.14348 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 7.14348 18.2625 5.36301 16.9497 4.05025C15.637 2.7375 13.8565 2 12 2Z"
                        fill="#FF0000" />
                </svg>

                <p>Jalan A. Yani Km 2 Nomor 13</p>
            </li>
            <li class="flex items-center space-x-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_11_24)">
                        <path
                            d="M12 4C12.855 4 13.732 4.022 14.582 4.058L15.586 4.106L16.547 4.163L17.447 4.224L18.269 4.288C19.1612 4.35589 20.0008 4.73643 20.64 5.3626C21.2791 5.98877 21.6768 6.8204 21.763 7.711L21.803 8.136L21.878 9.046C21.948 9.989 22 11.017 22 12C22 12.983 21.948 14.011 21.878 14.954L21.803 15.864L21.763 16.289C21.6768 17.1798 21.2789 18.0115 20.6396 18.6377C20.0002 19.2639 19.1604 19.6443 18.268 19.712L17.448 19.775L16.548 19.837L15.586 19.894L14.582 19.942C13.7218 19.9793 12.861 19.9986 12 20C11.139 19.9986 10.2782 19.9793 9.418 19.942L8.414 19.894L7.453 19.837L6.553 19.775L5.731 19.712C4.83881 19.6441 3.9992 19.2636 3.36004 18.6374C2.72089 18.0112 2.32319 17.1796 2.237 16.289L2.197 15.864L2.122 14.954C2.04583 13.9711 2.00514 12.9858 2 12C2 11.017 2.052 9.989 2.122 9.046L2.197 8.136L2.237 7.711C2.32316 6.82055 2.72071 5.98905 3.35966 5.36291C3.99861 4.73676 4.83799 4.35612 5.73 4.288L6.551 4.224L7.451 4.163L8.413 4.106L9.417 4.058C10.2775 4.02073 11.1387 4.00139 12 4ZM12 6C11.175 6 10.326 6.022 9.5 6.056L8.522 6.103L7.583 6.158L6.701 6.218L5.893 6.281C5.46819 6.31074 5.06769 6.49013 4.76266 6.78728C4.45763 7.08444 4.26784 7.48012 4.227 7.904C4.11 9.113 4 10.618 4 12C4 13.382 4.11 14.887 4.227 16.096C4.312 16.968 5.004 17.646 5.893 17.719L6.701 17.781L7.583 17.841L8.522 17.897L9.5 17.944C10.326 17.978 11.175 18 12 18C12.825 18 13.674 17.978 14.5 17.944L15.478 17.897L16.417 17.842L17.299 17.782L18.107 17.719C18.5318 17.6893 18.9323 17.5099 19.2373 17.2127C19.5424 16.9156 19.7322 16.5199 19.773 16.096C19.89 14.887 20 13.382 20 12C20 10.618 19.89 9.113 19.773 7.904C19.7322 7.48012 19.5424 7.08444 19.2373 6.78728C18.9323 6.49013 18.5318 6.31074 18.107 6.281L17.299 6.219L16.417 6.159L15.478 6.103L14.5 6.056C13.6671 6.02025 12.8336 6.00158 12 6ZM10 9.575C9.99994 9.47726 10.0237 9.38099 10.0694 9.29455C10.115 9.20812 10.181 9.13413 10.2618 9.07903C10.3425 9.02394 10.4354 8.98939 10.5326 8.97841C10.6297 8.96742 10.728 8.98033 10.819 9.016L10.9 9.056L15.1 11.48C15.1836 11.5283 15.2544 11.596 15.3063 11.6774C15.3581 11.7589 15.3896 11.8517 15.3979 11.9478C15.4062 12.044 15.3912 12.1408 15.3542 12.23C15.3171 12.3192 15.2591 12.3981 15.185 12.46L15.1 12.52L10.9 14.945C10.8154 14.994 10.72 15.0216 10.6223 15.0253C10.5246 15.0291 10.4274 15.0089 10.3393 14.9665C10.2511 14.9241 10.1747 14.8608 10.1166 14.7821C10.0585 14.7034 10.0205 14.6117 10.006 14.515L10 14.425V9.575Z"
                            fill="#FF0000" />
                    </g>
                    <defs>
                        <clipPath id="clip0_11_24">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <p>KAWAN BEJALANAN</p>
            </li>
            <li class="flex items-center space-x-2">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_11_28)">
                        <path
                            d="M14.5469 0H4.45312C1.99373 0 0 1.99373 0 4.45312V14.5469C0 17.0063 1.99373 19 4.45312 19H14.5469C17.0063 19 19 17.0063 19 14.5469V4.45312C19 1.99373 17.0063 0 14.5469 0Z"
                            fill="url(#paint0_radial_11_28)" />
                        <path
                            d="M14.5469 0H4.45312C1.99373 0 0 1.99373 0 4.45312V14.5469C0 17.0063 1.99373 19 4.45312 19H14.5469C17.0063 19 19 17.0063 19 14.5469V4.45312C19 1.99373 17.0063 0 14.5469 0Z"
                            fill="url(#paint1_radial_11_28)" />
                        <path
                            d="M9.50067 2.07812C7.48504 2.07812 7.23202 2.08696 6.44041 2.12295C5.65027 2.15917 5.11093 2.28423 4.63904 2.46777C4.15083 2.65733 3.73677 2.91093 3.32426 3.32359C2.91138 3.73617 2.65777 4.15024 2.46763 4.63823C2.28356 5.11026 2.15836 5.64983 2.1228 6.43959C2.0874 7.23128 2.07812 7.48437 2.07812 9.50007C2.07812 11.5158 2.08703 11.768 2.12295 12.5596C2.15932 13.3497 2.28438 13.8891 2.46777 14.361C2.65748 14.8492 2.91108 15.2632 3.32374 15.6757C3.73617 16.0886 4.15024 16.3428 4.63808 16.5324C5.11033 16.7159 5.64975 16.841 6.43974 16.8772C7.23143 16.9132 7.48422 16.922 9.49978 16.922C11.5156 16.922 11.7678 16.9132 12.5594 16.8772C13.3496 16.841 13.8895 16.7159 14.3618 16.5324C14.8498 16.3428 15.2632 16.0886 15.6756 15.6757C16.0885 15.2632 16.342 14.8492 16.5322 14.3612C16.7147 13.8891 16.8399 13.3496 16.877 12.5597C16.9126 11.7681 16.9219 11.5158 16.9219 9.50007C16.9219 7.48437 16.9126 7.23143 16.877 6.43974C16.8399 5.64961 16.7147 5.11033 16.5322 4.63845C16.342 4.15024 16.0885 3.73617 15.6756 3.32359C15.2628 2.91079 14.8499 2.65718 14.3613 2.46785C13.8882 2.28423 13.3485 2.1591 12.5584 2.12295C11.7667 2.08696 11.5147 2.07812 9.49837 2.07812H9.50067ZM8.83485 3.41562C9.0325 3.41532 9.253 3.41562 9.50067 3.41562C11.4824 3.41562 11.7172 3.42275 12.4998 3.4583C13.2234 3.4914 13.6162 3.6123 13.8778 3.71391C14.2242 3.84839 14.4711 4.00922 14.7307 4.26906C14.9905 4.52883 15.1512 4.7762 15.2861 5.12258C15.3877 5.38383 15.5088 5.77659 15.5417 6.50023C15.5773 7.28264 15.585 7.51762 15.585 9.49837C15.585 11.4791 15.5773 11.7142 15.5417 12.4965C15.5086 13.2201 15.3877 13.6129 15.2861 13.8742C15.1516 14.2206 14.9905 14.4672 14.7307 14.7269C14.4709 14.9866 14.2243 15.1474 13.8778 15.2819C13.6165 15.384 13.2234 15.5046 12.4998 15.5377C11.7174 15.5732 11.4824 15.581 9.50067 15.581C7.51888 15.581 7.28398 15.5732 6.50164 15.5377C5.778 15.5043 5.38524 15.3834 5.12339 15.2818C4.77709 15.1472 4.52964 14.9865 4.26988 14.7267C4.01011 14.4669 3.84936 14.2202 3.7145 13.8736C3.61289 13.6123 3.49184 13.2195 3.45889 12.4959C3.42334 11.7135 3.41621 11.4785 3.41621 9.49651C3.41621 7.51457 3.42334 7.28079 3.45889 6.49837C3.49199 5.77474 3.61289 5.38197 3.7145 5.12035C3.84906 4.77397 4.01011 4.5266 4.26995 4.26684C4.52972 4.00707 4.77709 3.84624 5.12347 3.71146C5.38509 3.60941 5.778 3.4888 6.50164 3.45555C7.1863 3.4246 7.45164 3.41532 8.83485 3.41377V3.41562ZM13.4625 4.64795C12.9708 4.64795 12.5718 5.0465 12.5718 5.53828C12.5718 6.02998 12.9708 6.4289 13.4625 6.4289C13.9542 6.4289 14.3531 6.02998 14.3531 5.53828C14.3531 5.04658 13.9542 4.64765 13.4625 4.64765V4.64795ZM9.50067 5.68857C7.39582 5.68857 5.68924 7.39516 5.68924 9.50007C5.68924 11.605 7.39582 13.3108 9.50067 13.3108C11.6056 13.3108 13.3116 11.605 13.3116 9.50007C13.3116 7.39523 11.6054 5.68857 9.50052 5.68857H9.50067ZM9.50067 7.02607C10.867 7.02607 11.9747 8.13363 11.9747 9.50007C11.9747 10.8664 10.867 11.9741 9.50067 11.9741C8.1343 11.9741 7.02673 10.8664 7.02673 9.50007C7.02673 8.13363 8.1343 7.02607 9.50067 7.02607Z"
                            fill="white" />
                    </g>
                    <defs>
                        <radialGradient id="paint0_radial_11_28" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(5.04687 20.4634) rotate(-90) scale(18.8304 17.5138)">
                            <stop stop-color="#FFDD55" />
                            <stop offset="0.1" stop-color="#FFDD55" />
                            <stop offset="0.5" stop-color="#FF543E" />
                            <stop offset="1" stop-color="#C837AB" />
                        </radialGradient>
                        <radialGradient id="paint1_radial_11_28" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(-3.18257 1.36867) rotate(78.681) scale(8.4173 34.6964)">
                            <stop stop-color="#3771C8" />
                            <stop offset="0.128" stop-color="#3771C8" />
                            <stop offset="1" stop-color="#6600FF" stop-opacity="0" />
                        </radialGradient>
                        <clipPath id="clip0_11_28">
                            <rect width="19" height="19" fill="white" />
                        </clipPath>
                    </defs>
                </svg>


                <p>kawanbejalan_</p>
            </li>
            <li class="flex items-center space-x-2">
                <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_11_33)">
                        <path
                            d="M14.0808 7.56151C15.467 8.52787 17.1653 9.09647 18.9995 9.09647V5.65464C18.6523 5.65477 18.3061 5.61943 17.9665 5.5492V8.25842C16.1325 8.25842 14.4344 7.6899 13.0479 6.72361V13.7475C13.0479 17.2612 10.1269 20.1094 6.52403 20.1094C5.17971 20.1094 3.93016 19.7131 2.89221 19.0333C4.07689 20.2146 5.729 20.9473 7.55671 20.9473C11.1599 20.9473 14.0809 18.0992 14.0809 14.5853V7.56151H14.0808ZM15.3551 4.08913C14.6466 3.33436 14.1814 2.35894 14.0808 1.28056V0.837891H13.1019C13.3483 2.20847 14.1888 3.3794 15.3551 4.08913ZM5.17102 16.337C4.77517 15.831 4.5612 15.2118 4.56221 14.5752C4.56221 12.9682 5.89822 11.6652 7.54654 11.6652C7.85368 11.665 8.15901 11.711 8.45179 11.8016V8.28275C8.10964 8.23706 7.76438 8.21758 7.41926 8.22475V10.9636C7.12633 10.873 6.82085 10.8271 6.51357 10.8273C4.86532 10.8273 3.52938 12.1302 3.52938 13.7374C3.52938 14.8739 4.19713 15.8577 5.17102 16.337Z"
                            fill="#FF004F" />
                        <path
                            d="M13.0479 6.72354C14.4346 7.68983 16.1325 8.25835 17.9666 8.25835V5.54913C16.9428 5.33645 16.0365 4.81478 15.3551 4.08913C14.1888 3.37933 13.3484 2.20839 13.102 0.837891H10.5308V14.5851C10.5249 16.1878 9.19123 17.4855 7.54647 17.4855C6.57732 17.4855 5.71624 17.035 5.17095 16.337C4.1972 15.8577 3.52938 14.8738 3.52938 13.7375C3.52938 12.1304 4.86532 10.8274 6.51357 10.8274C6.82937 10.8274 7.13374 10.8753 7.41926 10.9637V8.22482C3.87962 8.29615 1.03296 11.1165 1.03296 14.5852C1.03296 16.3168 1.74182 17.8865 2.89236 19.0334C3.93031 19.7131 5.17978 20.1095 6.52418 20.1095C10.1271 20.1095 13.048 17.2611 13.048 13.7475L13.0479 6.72354Z"
                            fill="black" />
                        <path
                            d="M17.9665 5.54907V4.81668C17.0433 4.81798 16.1383 4.56587 15.355 4.08913C16.0484 4.82936 16.9614 5.33982 17.9665 5.54921M13.1018 0.837828C13.0784 0.706873 13.0603 0.575044 13.0478 0.442666V0H9.49763V13.7474C9.49199 15.3499 8.15827 16.6476 6.51344 16.6476C6.04714 16.6482 5.58722 16.5419 5.17082 16.3371C5.71611 17.035 6.57719 17.4854 7.54634 17.4854C9.19103 17.4854 10.5249 16.1879 10.5307 14.5852V0.8379L13.1018 0.837828ZM7.41935 8.22476V7.44493C7.12269 7.40542 6.82362 7.38563 6.5242 7.3857C2.92088 7.3857 0 10.234 0 13.7474C0 15.9502 1.14794 17.8914 2.89238 19.0333C1.74184 17.8864 1.03298 16.3166 1.03298 14.5852C1.03298 11.1165 3.87956 8.29609 7.41935 8.22476Z"
                            fill="#00F2EA" />
                    </g>
                    <defs>
                        <clipPath id="clip0_11_33">
                            <rect width="19" height="21" fill="white" />
                        </clipPath>
                    </defs>
                </svg>


                <p>kawanbejalan_</p>
            </li>
        </ul>
    </div>
    <div class="w-1/2 border-l-[1px] border-black mt-10">
        <h2 class="font-bold text-3xl underline underline-offset-4 text-center">Review Wisata</h2>
        <div class="flex flex-col justify-center items-center px-20">
            <div class="flex space-x-10 mt-10">
                <img class="w-28 h-28 object-cover rounded-full" src="assets/image/review-1.png" alt="Rounded avatar">
                <div class="space-y-2">
                    <h4 class="font-bold text-2xl">Pantai teluk Tamiang</h4>
                    <p>I really like the view on Teluk Tamiang Beach, the water is very clear and makes me want to
                        come back again for a holiday.
                        Hye Sun - Korean</p>
                    <div class="flex items-center">
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex space-x-10 mt-10">
                <img class="w-28 h-28 object-cover rounded-full" src="assets/image/review-1.png" alt="Rounded avatar">
                <div class="space-y-2">
                    <h4 class="font-bold text-2xl">Pantai teluk Tamiang</h4>
                    <p>I really like the view on Teluk Tamiang Beach, the water is very clear and makes me want to
                        come back again for a holiday.
                        Hye Sun - Korean</p>
                    <div class="flex items-center">
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex space-x-10 mt-10">
                <img class="w-28 h-28 object-cover rounded-full" src="assets/image/review-1.png" alt="Rounded avatar">
                <div class="space-y-2">
                    <h4 class="font-bold text-2xl">Pantai teluk Tamiang</h4>
                    <p>I really like the view on Teluk Tamiang Beach, the water is very clear and makes me want to
                        come back again for a holiday.
                        Hye Sun - Korean</p>
                    <div class="flex items-center">
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-8 h-8 ms-3 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'layout/footer.php';
?>