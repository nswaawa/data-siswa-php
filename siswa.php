<?php
include 'koneksi.php';

$query = mysqli_query($db, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: AliceBlue;
            padding: 40px;
        }
        .container {
            width: 85%;
            margin: auto;
            background-color: White;
            padding: 30px;
            border-radius: 10px;
        }
        h1 {
            text-align: center;
        }
        .btn {
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 5px;
            color: White;
            font-weight: bold;
            display: inline-block;
        }
        .btn-tambah { background-color: Green; margin-bottom: 15px; }
        .btn-edit { background-color: Orange; color: Black; }
        .btn-hapus { background-color: Red; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid LightGray;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: RoyalBlue;
            color: White;
        }
        tr:nth-child(even) {
            background-color: Snow;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Data Siswa</h1>

        <a href="tambah.php" class="btn btn-tambah">+ Tambah Siswa</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $siswa) { ?>
                    <tr>
                        <td><?php echo $siswa['id'] ?></td>
                        <td><?php echo $siswa['nis'] ?></td>
                        <td><?php echo $siswa['nama'] ?></td>
                        <td><?php echo $siswa['kelas'] ?></td>
                        <td><?php echo $siswa['jurusan'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $siswa['id']; ?>" class="btn btn-edit">Edit</a>
                            <a href="hapus.php?id=<?php echo $siswa['id']; ?>" class="btn btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>