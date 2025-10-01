<?php
$nama   = "ABID";
$nim    = "22-201";
$kelas  = "PAW-3B";
$prodi  = "Teknik Informatika";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>PHP + HTML</title>
</head>
<body>
  <table border="1" cellpadding="5" cellspacing="0">
    <tr><td>Nama</td><td><?= $nama ?></td></tr>
    <tr><td>NIM</td><td><?= $nim ?></td></tr>
    <tr><td>Kelas</td><td><?= $kelas ?></td></tr>
    <tr><td>Prodi</td><td><?= $prodi ?></td></tr>
  </table>
</body>
</html>
