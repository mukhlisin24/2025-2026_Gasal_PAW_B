<?php
$nama1 = "Rifqi Fairurrafi";
$nim1 = 240411100201;
$kelas1 = "PAW IF3B";
$prodi1 = "Teknik Informatika";
$alamat1 = "Littleroot Town";
$hobi1 = "Sabung pokemon";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h2>Biodata</h2>
    <table border="1">
        <tr bgcolor="cyan">
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Program Studi</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
        <tr>
            <td><?= $nama1 ?></td>
            <td><?= $nim1 ?></td>
            <td><?= $kelas1 ?></td>
            <td><?= $prodi1 ?></td>
            <td><?= $alamat1 ?></td>
            <td><?= $hobi1 ?></td>
        </tr>
    </table>
</body>
</html>