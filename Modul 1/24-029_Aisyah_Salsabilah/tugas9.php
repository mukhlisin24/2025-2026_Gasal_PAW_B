<?php
// Fungsi tanpa argumen
function salam() {
    echo "Halo, Selamat Datang!<br>";
}
salam();

// Fungsi dengan 1 argumen
function sapa($nama) {
    echo "Halo $nama!<br>";
}
sapa("Aisyah");

// Fungsi dengan lebih dari 1 argumen
function tambah($a, $b) {
    echo "Hasil: " . ($a + $b) . "<br>";
}
tambah(5, 7);

// Fungsi dengan default value
function perkenalan($nama = "Anonim") {
    echo "Nama saya $nama <br>";
}
perkenalan();
perkenalan("Salsabilah");

// Fungsi dengan return
function kali($x, $y) {
    return $x * $y;
}
$hasil = kali(4, 5);
echo "Hasil perkalian: $hasil";
?>