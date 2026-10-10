<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nis     = $_POST['nis'];
    $nama    = $_POST['nama'];
    $kelas   = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query($db, "INSERT INTO siswa (nis, nama, kelas, jurusan) VALUES ('$nis', '$nama', '$kelas', '$jurusan')");

    if ($query) {
        header("Location: siswa.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($db);
    }
}
?>