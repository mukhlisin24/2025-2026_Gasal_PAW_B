
<?php
function Hai() {
    echo "Halo dari fungsi!<br>";
}

function sapa($nama) {
    echo "Hai, $nama!<br>";
}

function tambah($a, $b) {
    echo "Hasil penjumlahan: " . ($a + $b) . "<br>";
}

function perkenalan($nama = "Anonim") {
    echo "Hai, nama saya $nama<br>";
}

function kali($x, $y) {
    return $x * $y;
}

Hai();
sapa("Zaki");
tambah(15, 5);
perkenalan();
perkenalan("Lydia");
echo "Hasil perkalian: " . kali(5, 5);
?>