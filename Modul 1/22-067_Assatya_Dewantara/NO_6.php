<?php
$txt = "PHP";

// Interpolasi (langsung di dalam string, pakai kutip ganda)
echo "Menggunakan interpolasi memakai kutip ganda = I love $txt <br>";

// Jika pakai kutip tunggal, variabel tidak terbaca
echo 'Menggunakan Interpolasi memakai kutip tunggal = I love $txt <br>'; // Output literal: I love $txt

// Konkatenasi (menggunakan tanda titik .)
echo "Menggunakan kontenasi = I love " . $txt . "<br>";
?>
