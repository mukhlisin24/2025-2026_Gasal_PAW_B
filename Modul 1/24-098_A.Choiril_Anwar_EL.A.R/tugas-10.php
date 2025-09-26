<?php
$nama   = "Riel";
$nim    = "240411100098";
$kelas  = "PAW IF 3B";
$prodi  = "Teknik Informatika";
$alamat = "Jl. Jambu raya no 62 perumnas kamal";
$hobi   = "Mendengarkan Musik";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h2 align="center">Biodata Mahasiswa</h2>
    <table border="2" align="center" style="border-collapse: collapse; width: 30%; ">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?= $nim ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><?= $kelas ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><?= $prodi ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td><?= $hobi ?></td>
        </tr>
    </table>
</body>
</html>
