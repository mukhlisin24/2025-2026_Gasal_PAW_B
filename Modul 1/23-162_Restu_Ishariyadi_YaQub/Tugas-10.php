<?php
$nama = "Restu Ishariyadi YaQub";
$nim = "23-162";
$kelas = "IF 3B";
$prodi = "Teknik Informatika";
$alamat = "Sukun 11";
$hobi = "Mancing";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Mahasiswa</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 30px auto; }
        th, td { border: 1px solid #333; padding: 8px 16px; text-align: left; }
        th { background: #3f9933ff; }
        caption { font-size: 1.3em; margin-bottom: 10px; font-weight: bold; }
    </style>
</head>
<body>
    <table>
        <caption>Biodata Mahasiswa</caption>
        <tr><th>Keterangan</th><th>Isi</th></tr>
        <tr><td>Nama Lengkap</td><td><?php echo $nama; ?></td></tr>
        <tr><td>NIM</td><td><?php echo $nim; ?></td></tr>
        <tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
        <tr><td>Program Studi</td><td><?php echo $prodi; ?></td></tr>
        <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
        <tr><td>Hobi</td><td><?php echo $hobi; ?></td></tr>
    </table>
</body>
</html>