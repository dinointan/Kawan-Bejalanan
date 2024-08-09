<?php
include '../config/koneksi.php';

if (isset($_POST['submit'])) {
    if ($_POST['transportasi'] === "" || $_POST['penginapan'] === "" || $_POST['makan'] === "" || $_POST['total_bayar'] === "") {
        echo "<script>alert('Silahkan totalkan terlebih dahulu');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        $nama_pemesan = $_POST['nama_pemesan'];
        $nomor_hp = $_POST['nomor_hp'];
        $tanggal_pesan = $_POST['tanggal_pesan'];
        $jumlah_orang = $_POST['jumlah_orang'];
        $transportasi = $_POST['transportasi'];
        $penginapan = $_POST['penginapan'];
        $makan = $_POST['makan'];
        $total_bayar = $_POST['total_bayar'];
        $waktu_perjalanan = $_POST['waktu_perjalanan'];
        $wisata_id = $_POST['wisata_id'];
        $id = $_POST['id'];

        $query = mysqli_query(
            $db,
            "UPDATE pesanan SET 
            nama_pemesan = '$nama_pemesan',
            nomor_hp = '$nomor_hp',
            tanggal_pesan = '$tanggal_pesan',
            jumlah_orang = '$jumlah_orang',
            transportasi = '$transportasi',
            penginapan = '$penginapan',
            makan = '$makan',
            total_bayar = '$total_bayar',
            waktu_perjalanan = '$waktu_perjalanan',
            wisata_id = '$wisata_id'
            WHERE id = '$id'"
        );
        if ($query) {
            echo "<script>alert('Berhasil melakukan edit pemesanan');</script>";
            echo "<script>
                localStorage.setItem('id_pesanan', '$id');
                window.location.href = '/pesanan/history.php';
            </script>";
        } else {
            echo "<script>alert('Gagal melakukan edit pemesanan');</script>";
            echo "<script>window.history.back();</script>";
        }
    }
}