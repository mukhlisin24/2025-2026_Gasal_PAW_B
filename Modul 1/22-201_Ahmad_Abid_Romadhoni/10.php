<?php
$nama = "Ahmad Abid Romadhoni";
$nim = "220411100201";
$kelas = "PAW-3B";
$prodi = "Teknik Informatika";
$alamat = "Jl. PUK No. 10, Bojonegoro";
$hobi = "Mancing";
?>

<table border="1" cellpadding="8" cellspacing="0">
    <tr style="background-color: lightgray;">
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>NIM</td>
        <td><?php echo $nim; ?></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td><?php echo $kelas; ?></td>
    </tr>
    <tr>
        <td>Program Studi</td>
        <td><?php echo $prodi; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td><?php echo $hobi; ?></td>
    </tr>
</table>
