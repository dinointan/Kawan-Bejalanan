<?php
include '../config/koneksi.php';

if (isset($_GET['id'])) {
    $idPesanan = $_GET['id'];
    // Query untuk mengambil data pesanan beserta data wisata yang terkait
    $query = mysqli_query($db, "
        SELECT p.*, w.nama AS nama_wisata
        FROM pesanan p
        JOIN wisata w ON p.wisata_id = w.id
        WHERE p.id = '$idPesanan'
    ");

    if ($query && mysqli_num_rows($query) > 0) {
        $pesanan = mysqli_fetch_assoc($query);
        echo json_encode([
            'success' => true,
            'pesanan' => $pesanan
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Pesanan tidak ditemukan'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'ID pesanan tidak diberikan'
    ]);
}