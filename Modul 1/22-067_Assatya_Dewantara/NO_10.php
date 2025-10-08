<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata Mahasiswa</title>
</head>
<body>

    <h2>Biodata Mahasiswa</h2>

    <?php
    // Variabel biodata
    $nama   = "Assatya Dewantara";
    $nim    = "220411100067";
    $kelas  = "IF PAW 3";
    $prodi  = "Teknik Informatika";
    $alamat = "Jl. Raya Telang No. 4";
    $hobi   = "Ngoding & Bermain Game";
    ?>

    <table border="1">
        <tr>
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

</body>
</html>
