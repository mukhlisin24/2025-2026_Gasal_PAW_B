<?php
function salam() {
    echo "Halo, selamat datang!<br>";
}
salam();

function sapa($nama) {
    echo "Halo, $nama!<br>";
}
sapa("Riel");

function hitung($a, $b) {
    echo "hasil dari a + b  adalah ($a + $b)";
}
hitung(23, 11);

function tahun($tahun=1000) {
    echo "Tahun: $tahun<br>";
}
tahun(2900);
tahun();

function kali($a, $b) {
    return $a * $b;
}
$hasil = kali(4, 6);
echo "Hasil kali: $hasil";
?>
