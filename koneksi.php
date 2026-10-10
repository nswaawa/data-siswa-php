<?php
$db = mysqli_connect("localhost", "root", "", "sekolah");

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>