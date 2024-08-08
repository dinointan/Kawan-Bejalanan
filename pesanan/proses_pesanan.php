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

        $query = mysqli_query($db, "INSERT INTO pesanan (wisata_id, nama_pemesan, nomor_hp, tanggal_pesan, jumlah_orang, transportasi, penginapan, makan, total_bayar, waktu_perjalanan) VALUES ('$wisata_id', '$nama_pemesan', '$nomor_hp', '$tanggal_pesan', '$jumlah_orang', '$transportasi', '$penginapan', '$makan', '$total_bayar', '$waktu_perjalanan')");
        if ($query) {
            $id_pesanan = mysqli_insert_id($db);
            echo "<script>alert('Berhasil melakukan pemesanan');</script>";
            echo "<script>
                localStorage.setItem('id_pesanan', '$id_pesanan');
                window.location.href = '/pesanan/history.php';
            </script>";
        } else {
            echo "<script>alert('Gagal melakukan pemesanan');</script>";
            echo "<script>window.history.back();</script>";
        }
    }
}