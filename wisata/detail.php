<?php
include '../config/koneksi.php';

$query = mysqli_query($db, "SELECT * FROM wisata WHERE id = " . $_GET['id']);
$wisata = mysqli_fetch_assoc($query);

include '../layout/header.php';
include '../layout/navbar.php';

?>

<section class="py-8 bg-white md:py-32 dark:bg-gray-900 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
            <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                <img class="w-full dark:hidden rounded-lg" src="/assets/image/<?= $wisata['gambar'] ?>"
                    alt="pantai teluk tamiang" />
                <img class="w-full hidden dark:block" />
            </div>

            <div class="mt-6 sm:mt-8 lg:mt-0">
                <h1 class="text-xl font-bold text-gray-900 sm:text-3xl dark:text-white">
                    <?= $wisata['nama'] ?>
                </h1>

                <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                    <p class="text-2xl font-normal text-gray-900 sm:text-[18px] dark:text-white">
                        <?= $wisata['alamat'] ?>
                    </p>
                </div>

                <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                    <a href="/pesanan/index.php?wisata=<?= $wisata['id'] ?>" title=""
                        class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-[#95E681] rounded-lg border border-[#77ed5a] hover:bg-[#77ed5a] hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        role="button">
                        PESAN PAKET
                    </a>

                </div>

                <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                <p class="mb-6 text-gray-500 dark:text-gray-400 text-justify">
                    <?= $wisata['deskripsi'] ?>
                </p>
            </div>
        </div>
    </div>
</section>