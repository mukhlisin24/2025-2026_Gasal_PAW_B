<?php
$namaLengkap = "Bangkit Rizky Lillah";
$nim = "230411100085";
$kelas = "PAW-B";
$prodi = "Teknik Informatika";
$alamat = "Semarum-Durenan-Trenggalek";
$hobi = "Desainer, Streamer";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Biodata Mahasiswa</h2>

<table border="1" class="biodata">
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr><td>Nama Lengkap</td><td><?php echo $namaLengkap; ?></td></tr>
    <tr><td>NIM</td><td><?php echo $nim; ?></td></tr>
    <tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
    <tr><td>Program Studi</td><td><?php echo $prodi; ?></td></tr>
    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
    <tr><td>Hobi</td><td><?php echo $hobi; ?></td></tr>
</table>

</body>
</html>
