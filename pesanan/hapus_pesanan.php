<?php
include '../config/koneksi.php';

if (isset($_GET['pesanan'])) {
    $id_pesanan = $_GET['pesanan'];  // Pastikan id_pesanan dikirim dari form

    $query = mysqli_query($db, "DELETE FROM pesanan WHERE id = '$id_pesanan'");

    if ($query) {
        echo "<script>alert('Berhasil menghapus pesanan');</script>";
        echo "<script>
            window.location.href = '/pesanan/history.php';
        </script>";
    } else {
        echo "<script>alert('Gagal menghapus pesanan');</script>";
        echo "<script>window.history.back();</script>";
    }
}