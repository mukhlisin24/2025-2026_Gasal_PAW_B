<?php
$kalimat = "saya sedang mengerjakan soal nomor 8 ditugas pertama";

echo "<h3>soal nomor 8</h3>";
echo "kalimat = ".$kalimat."<br>";
echo "Panjang string: " . strlen($kalimat) . "<br>";
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";
echo "String dibalik: " . strrev($kalimat) . "<br>";
echo "Posisi kata 'sedang': " . strpos($kalimat, "sedang") . "<br>";
echo "Ganti kata: " . str_replace("sedang", "selesai", $kalimat) . "<br>";


?>
