<?php
include 'koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($db, "SELECT * FROM siswa WHERE id='$id'");
$siswa = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nis     = $_POST['nis'];
    $nama    = $_POST['nama'];
    $kelas   = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $update = mysqli_query($db, "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'");

    if ($update) {
        header("Location: siswa.php");
        exit();
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: AliceBlue; padding: 40px; }
        .container { width: 50%; margin: auto; background-color: White; padding: 30px; border-radius: 10px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 8px; box-sizing: border-box; }
        .btn-submit { background-color: Orange; color: Black; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; }
        .btn-batal { background-color: Gray; color: White; padding: 10px 15px; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Edit Data Siswa</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label>NIS:</label>
                <input type="text" name="nis" value="<?php echo $siswa['nis']; ?>" required>
            </div>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" value="<?php echo $siswa['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label>Kelas:</label>
                <input type="text" name="kelas" value="<?php echo $siswa['kelas']; ?>" required>
            </div>
            <div class="form-group">
                <label>Jurusan:</label>
                <input type="text" name="jurusan" value="<?php echo $siswa['jurusan']; ?>" required>
            </div>
            <button type="submit" name="update" class="btn-submit">Update</button>
            <a href="siswa.php" class="btn-batal">Batal</a>
        </form>
    </div>

</body>
</html>