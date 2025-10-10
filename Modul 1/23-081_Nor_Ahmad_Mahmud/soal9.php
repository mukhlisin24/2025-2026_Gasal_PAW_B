<?php
// Fungsi tanpa argumen
function salam() {
    echo "Halo, Selamat Datang!<br>";
}

// Fungsi dengan 1 argumen
function sapa($nama) {
    echo "Halo, $nama<br>";
}

// Fungsi dengan 2 argumen
function jumlah($a, $b) {
    echo "Hasil: " . ($a + $b) . "<br>";
}

// Fungsi dengan default value
function perkenalan($nama = "Anonim") {
    echo "Perkenalkan, saya $nama<br>";
}

// Fungsi dengan return
function kali($a, $b) {
    return $a * $b;
}

salam();
sapa("Andi");
jumlah(5, 7);
perkenalan();
perkenalan("Budi");
echo "Perkalian 4 x 5 = " . kali(4,5);
?>
