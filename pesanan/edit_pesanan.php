<?php
require '../config/koneksi.php';

include '../layout/header.php';
include '../layout/navbar.php';

$id = $_GET['id'];

$query = mysqli_query($db, "
    SELECT p.*, w.nama AS nama_wisata, w.harga_transportasi, w.harga_penginapan, w.harga_makan
    FROM pesanan p
    JOIN wisata w ON p.wisata_id = w.id
    WHERE p.id = '$id'
");
$pesanan = mysqli_fetch_assoc($query);

?>
if ($pesanan) {
<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="mx-auto max-w-5xl">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-3xl underline underline-offset-4 text-center"
                value="<?php echo $pesanan['id'] ?>">
                Form Pemesanan Paket Wisata</h2>

            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
                <form action="/pesanan/editaksi_pesanan.php" method="post"
                    class="w-full rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 lg:max-w-xl lg:p-8">
                    <input type="hidden" id="post_transportasi" name="transportasi"
                        value="<?= $pesanan['transportasi'] ?>">
                    <input type="hidden" id="post_penginapan" name="penginapan" value="<?= $pesanan['penginapan'] ?>">
                    <input type="hidden" id="post_makan" name="makan" value="<?= $pesanan['makan'] ?>">
                    <input type="hidden" id="total_bayar" name="total_bayar" value="<?= $pesanan['total_bayar'] ?>">
                    <input type="hidden" id="wisata_id" name="wisata_id" value="<?= $pesanan['wisata_id'] ?>">
                    <input type="hidden" id="id" name="id" value="<?= $pesanan['id'] ?>">
                    <div class="mb-6 grid grid-cols-1 gap-4">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="nama_pemesan"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Nama Pemesan
                            </label>
                            <input type="text" name="nama_pemesan" value="<?php echo $pesanan['nama_pemesan'] ?>"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" />
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="nomor_hp" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                Nomor HP/Telp </label>
                            <input type="tel" id="nomor_hp" name="nomor_hp" value="<?php echo $pesanan['nomor_hp'] ?>"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="08xxxxx" required />
                        </div>

                        <div>
                            <label for="tanggal_pesan"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tanggal Pesan
                            </label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input id="tanggal_pesan" name="tanggal_pesan" datepicker datepicker-format="yyyy/mm/dd"
                                    id="tanggal_pesan" type="text"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-9 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="12/23" required value="<?php echo $pesanan['tanggal_pesan'] ?>" />
                            </div>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="waktu_perjalanan"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Waktu
                                Perjalanan/hari </label>
                            <input type="number" id="waktu_perjalanan" name="waktu_perjalanan"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Waktu Perjalanan..." required
                                value="<?php echo $pesanan['waktu_perjalanan'] ?>" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <div class="flex items-center mb-4">
                                <input id="transportasi" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    <?= $pesanan['transportasi'] == 0 ? '' : 'checked' ?>>
                                <label for="transportasi" class="ms-2 text-sm font-bold text-blue-400">Transportasi (Rp.
                                    <?= number_format($pesanan['harga_transportasi'], 0, ',', '.') ?>)</label>
                            </div>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <div class="flex items-center mb-4">
                                <input id="penginapan" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    <?= $pesanan['penginapan'] == 0 ? '' : 'checked' ?>>
                                <label for="penginapan" class="ms-2 text-sm font-bold text-blue-400">Penginapan (Rp.
                                    <?= number_format($pesanan['harga_penginapan'], 0, ',', '.') ?>)</label>
                            </div>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <div class="flex items-center mb-4">
                                <input id="makan" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    <?= $pesanan['makan'] == 0 ? '' : 'checked' ?>>
                                <label for="makan" class="ms-2 text-sm font-bold text-blue-400">Makan (Rp.
                                    <?= number_format($pesanan['harga_makan'], 0, ',', '.') ?>)</label>
                            </div>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="jumlah_orang"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Jumlah Orang
                            </label>
                            <input type="number" id="jumlah_orang" name="jumlah_orang"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Jumlah..." required value="<?php echo $pesanan['jumlah_orang'] ?>" />
                        </div>
                    </div>

                    <button name="submit" type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit
                        Paket Wisata</button>
                    <button onclick="hitung()" type="button"
                        class="text-white bg-green-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  dark:hover:bg-green focus:outline-none">Hitung
                        Total</button>
                </form>

                <div class="mt-6 grow sm:mt-8 lg:mt-0">
                    <div
                        class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
                        <div class="space-y-2">
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Transportasi</dt>
                                <dd id="harga-transportasi" class="text-base font-medium text-gray-900 dark:text-white">
                                    Rp. <?= number_format($pesanan['transportasi'], 0, ',', '.') ?></dd>
                            </dl>
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">penginapan</dt>
                                <dd id="harga-penginapan" class="text-base font-medium text-gray-900 dark:text-white">
                                    Rp. <?= number_format($pesanan['penginapan'], 0, ',', '.') ?></dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Makan</dt>
                                <dd id="harga-makan" class="text-base font-medium text-gray-900 dark:text-white">Rp.
                                    <?= number_format($pesanan['makan'], 0, ',', '.') ?>
                                </dd>
                            </dl>
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400"></dt>
                                <dd id="total-sementara" class="text-base font-medium text-gray-900 dark:text-white">Rp.
                                    <?= number_format((($pesanan['transportasi'] + $pesanan['penginapan'] + $pesanan['makan']) * $pesanan['jumlah_orang'] * $pesanan['waktu_perjalanan']), 0, ',', '.') ?>
                                </dd>
                            </dl>
                        </div>

                        <dl
                            class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                            <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                            <dd id="total" class="text-base font-bold text-gray-900 dark:text-white">Rp.
                                <?= number_format($pesanan['total_bayar'], 0, ',', '.') ?>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>


<script>
    function hitung() {
        // rumus
        // total = penginapan + transportasi + makanan;
        // 500.000 + 500.000 + 30.000 = 1.030.000
        // totalSeluruh = jumlahHari * jumlahOrang;
        // 2 * 2 * total = 4.120.000

        // harga-harga
        const hargaTransportasi = <?= $pesanan['harga_transportasi'] ?>;
        const hargaPenginapan = <?= $pesanan['harga_penginapan'] ?>;
        const hargaMakan = <?= $pesanan['harga_makan'] ?>;

        // ambil data dari form
        const waktuPerjalanan = document.getElementById('waktu_perjalanan').value;
        const jumlahOrang = document.getElementById('jumlah_orang').value;
        const transportasi = document.getElementById('transportasi').checked;
        const penginapan = document.getElementById('penginapan').checked;
        const makan = document.getElementById('makan').checked;

        // element harga
        const hargaTransportasiElement = document.getElementById('harga-transportasi');
        const hargaPenginapanElement = document.getElementById('harga-penginapan');
        const hargaMakanElement = document.getElementById('harga-makan');
        const total = document.getElementById('total');

        if (transportasi || penginapan || makan) {
            if (!waktuPerjalanan || !jumlahOrang) {
                alert('Isi semua form');
                return;
            }
            let totalHarga = 0;
            if (transportasi) {
                totalHarga += hargaTransportasi;
                hargaTransportasiElement.innerText = `Rp. ${new Intl.NumberFormat().format(hargaTransportasi)}`;
            } else {
                hargaTransportasiElement.innerText = `Rp. ${new Intl.NumberFormat().format(0)}`;
            }

            if (penginapan) {
                totalHarga += hargaPenginapan;
                hargaPenginapanElement.innerText = `Rp. ${new Intl.NumberFormat().format(hargaPenginapan)}`;
            } else {
                hargaPenginapanElement.innerText = `Rp. ${new Intl.NumberFormat().format(0)}`;
            }

            if (makan) {
                totalHarga += hargaMakan;
                hargaMakanElement.innerText = `Rp. ${new Intl.NumberFormat().format(hargaMakan)}`;
            } else {
                hargaMakanElement.innerText = `Rp. ${new Intl.NumberFormat().format(0)}`;
            }

            total.innerText = `Rp. ${new Intl.NumberFormat().format(totalHarga * waktuPerjalanan * jumlahOrang)}`;

            // mengubah value di input type hidden
            document.getElementById('post_transportasi').value = transportasi ? hargaTransportasi : 0;
            document.getElementById('post_penginapan').value = penginapan ? hargaPenginapan : 0;
            document.getElementById('post_makan').value = makan ? hargaMakan : 0;
            document.getElementById('total-sementara').innerText = `Rp. ${new Intl.NumberFormat().format(totalHarga)} x ${waktuPerjalanan} Hari x ${jumlahOrang} Orang`;
            document.getElementById('total_bayar').value = totalHarga * waktuPerjalanan * jumlahOrang;
        } else {
            alert('Pilih salah satu layanan');
        }

    }
</script>

<?php
include '../layout/footer.php';
?>