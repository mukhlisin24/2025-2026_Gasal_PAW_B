<?php
$kalimat = "Belajar PHP itu mudah dan menyenangkan";

echo "String asli: $kalimat <br>";
echo "Panjang string: " . strlen($kalimat) . "<br>";
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";
echo "String dibalik: " . strrev($kalimat) . "<br>";
echo "Posisi kata 'PHP': " . strpos($kalimat, "PHP") . "<br>";
echo "Ganti kata 'mudah' menjadi 'seru': " . str_replace("mudah", "seru", $kalimat);
?>