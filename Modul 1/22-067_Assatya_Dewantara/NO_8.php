<?php
$teks = "Belajar PHP itu menyenangkan";
echo "contoh kata : " . $teks . "<br>";

// 1. strlen() → menghitung panjang string
echo "menggunakan strlen() untuk menghitung Panjang string: " . strlen($teks) . "<br>";

// 2. str_word_count() → menghitung jumlah kata
echo "menggunakan str_word_count() untuk menghitung Jumlah kata: " . str_word_count($teks) . "<br>";

// 3. strrev() → membalik string
echo "menggunakan strrev() untuk membalik string: " . strrev($teks) . "<br>";

// 4. strpos() → mencari posisi substring
$posisi = strpos($teks, "PHP");
echo "menggunakan strpos() untuk mencari Posisi kata 'PHP': " . $posisi . "<br>";

// 5. str_replace() → mengganti kata dalam string
$ganti = str_replace("menyenangkan", "mudah dipelajari", $teks);
echo "menggunakan str_replace() untuk mengganti menyenangkan menjadi mudah dipelajari : " . $ganti . "<br>";
?>
