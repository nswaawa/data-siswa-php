<?php

include 'koneksi.php';

$query = mysqli_query($db, "SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #2563eb;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Data Siswa</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
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
                    </tr>

                <?php } ?>

            </tbody>
        </table>

    </div>

</body>
</html>