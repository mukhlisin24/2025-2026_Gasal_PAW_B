<?php
$nama   = "Andi Setiawan";
$nim    = "230811001";
$kelas  = "3A";
$prodi  = "Informatika";
$alamat = "Jl. Merdeka No. 10, Jakarta";
$hobi   = "Membaca dan Coding";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background: lightgray;
        }
    </style>
</head>
<body>
    <h2>Biodata Mahasiswa</h2>
    <table>
        <tr><th>Field</th><th>Value</th></tr>
        <tr><td>Nama Lengkap</td><td><?php echo $nama; ?></td></tr>
        <tr><td>NIM</td><td><?php echo $nim; ?></td></tr>
        <tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
        <tr><td>Program Studi</td><td><?php echo $prodi; ?></td></tr>
        <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
        <tr><td>Hobi</td><td><?php echo $hobi; ?></td></tr>
    </table>
</body>
</html>
