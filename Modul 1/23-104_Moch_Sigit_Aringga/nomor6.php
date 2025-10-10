<?php

$prodi = "Teknik Informatika";
$angkatan = 2023;

echo "<h3>ini soal nomor 6</h3>";
echo "<h3>pakai Konkatenasi</h3>";
echo 'Saya mahasiswa prodi ' . $prodi . ', angkatan ' . $angkatan . '.';
echo "<br>";

echo "<h3>pakai Interpolasi</h3>";
echo "Saya mahasiswa prodi $prodi, angkatan $angkatan.";

?>