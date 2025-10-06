<?php
    $nama = "Triswanti Jannatul Ma'wa";
    $nim = 240411100125;
    $kelas = "PAWIF3B";
    $prodi = "Teknik Informatika";
    $alamat = "Lamongan";
    $hobi = "Coret-coret buku";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>biodata</title>
</head>
<body>
    <h2>Tabel Biodata</h2>
    <table border="1">
        <tr>
            <td><b>Nama Lengkap</td>
            <td><b>NIM</td>
            <td><b>Kelas</td>
            <td><b>Program Studi</td>
            <td><b>Alamat</td>
            <td><b>Hobi</td>
        </tr>
        <tr>
            <td><?= $nama ?></td>
            <td><?= $nim ?></td>
            <td><?= $kelas ?></td>
            <td><?= $prodi ?></td>
            <td><?= $alamat ?></td>
            <td><?= $hobi ?></td>
        </tr>
    </table>
</body>
</html>