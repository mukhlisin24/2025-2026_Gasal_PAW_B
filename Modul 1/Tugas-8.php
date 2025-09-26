<?php
# String asli
$text = "Praktikum PAW";

# Menghitung panjang string
$length = strlen($text);

# Menghitung jumlah kata
$word_count = str_word_count($text);

# Membalik string
$reversed = strrev($text);

# Mencari posisi substring "PAW"
$pos_php = strpos($text, "PAW");

# Mengganti kata "menyenangkan" dengan "mudah"
$replaced = str_replace("PAW", "Pemrograman Aplikasi Web", $text);

echo "Teks asli: $text<br>";
echo "Panjang string: $length<br>";
echo "Jumlah kata: $word_count<br>";
echo "String dibalik: $reversed<br>";
echo "Posisi 'PAW': $pos_php<br>";
echo "Setelah diganti: $replaced<br>";
?>