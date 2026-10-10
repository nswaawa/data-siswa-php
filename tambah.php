<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: AliceBlue; padding: 40px; }
        .container { width: 50%; margin: auto; background-color: White; padding: 30px; border-radius: 10px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 8px; box-sizing: border-box; }
        .btn-submit { background-color: RoyalBlue; color: White; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; }
        .btn-batal { background-color: Gray; color: White; padding: 10px 15px; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Tambah Data Siswa</h2>
        <form action="simpan.php" method="POST">
            <div class="form-group">
                <label>NIS:</label>
                <input type="text" name="nis" required>
            </div>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>Kelas:</label>
                <input type="text" name="kelas" required>
            </div>
            <div class="form-group">
                <label>Jurusan:</label>
                <input type="text" name="jurusan" required>
            </div>
            <button type="submit" name="simpan" class="btn-submit">Simpan</button>
            <a href="siswa.php" class="btn-batal">Batal</a>
        </form>
    </div>

</body>
</html>