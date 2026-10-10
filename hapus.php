<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM siswa WHERE id='$id'");

    if ($hapus) {
        header("Location: siswa.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($db);
    }
}
?>