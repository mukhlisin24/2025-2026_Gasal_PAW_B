<?php 
    $Nama_Lengkap= "Hasnah Latifiyah Agizni";
    $NIM = 240411100130;
    $Kelas= "PAW B";
    $Program_Studi= "Teknik Informatika";
    $Alamat="pamekasan";
    $hobi="nonton film";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nama Lengkap</td>
            <td>NIM</td>
            <td>kelas</td>
            <td>Program Studi</td>
            <td>Alamat</td>
            <td>Hobi</td>
        </tr>
        <tr>
            <td><?= $Nama_Lengkap?></td>
            <td><?= $NIM?></td>
            <td><?= $Kelas?></td>
            <td><?= $Program_Studi?></td>
            <td><?= $Alamat?></td>
            <td><?= $hobi?></td>
        </tr>
    </table>
    <br>
</body>
</html>

