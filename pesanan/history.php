<?php
include '../config/koneksi.php';
include '../layout/header.php';
include '../layout/navbar.php';
?>
<div class="relative overflow-x-auto shadow-md h-screen">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <caption
            class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            History Pesanan
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Paket Wisata
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Pemesan
                </th>
                <th scope="col" class="px-6 py-3">
                    Nomor HP
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Pesan
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah Orang
                </th>
                <th scope="col" class="px-6 py-3">
                    Transportasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Penginapan
                </th>
                <th scope="col" class="px-6 py-3">
                    Makan
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Bayar
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Mengambil id_pesanan dari LocalStorage
        const idPesanan = localStorage.getItem('id_pesanan');

        if (idPesanan) {
            // Melakukan permintaan AJAX ke server untuk mendapatkan data pesanan
            fetch(`get_pesanan.php?id=${idPesanan}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Menampilkan data pesanan di tabel
                        const tbody = document.querySelector('tbody');
                        tbody.innerHTML = `
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ${data.pesanan.nama_wisata}
                                </th>
                                <td class="px-6 py-4">
                                    ${data.pesanan.nama_pemesan}
                                </td>
                                <td class="px-6 py-4">
                                    ${data.pesanan.nomor_hp}
                                </td>
                                <td class="px-6 py-4">
                                    ${data.pesanan.tanggal_pesan}
                                </td>
                                <td class="px-6 py-4">
                                    ${data.pesanan.jumlah_orang}
                                </td>
                                <td class="px-6 py-4">
                                    ${data.pesanan.transportasi}
                                </td>
                                <td class="px-6 py-4">
                                    ${data.pesanan.penginapan}
                                </td>
                                <td class="px-6 py-4">
                                    ${data.pesanan.makan}
                                </td>
                                <td class="px-6 py-4">
                                    ${data.pesanan.total_bayar}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="/pesanan/edit_pesanan.php?id=${data.pesanan.id}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="/pesanan/hapus_pesanan.php?pesanan=${data.pesanan.id}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                                </td>
                            </tr>
                        `;
                    } else {
                        alert('Pesanan tidak ditemukan');
                    }
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        } else {
            alert('Tidak ada pesanan terbaru');
        }
    });
</script>



<?php
include '../layout/footer.php';
?>