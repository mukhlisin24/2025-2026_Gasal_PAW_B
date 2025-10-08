<?php
// 1. Fungsi dasar tanpa argumen
function salam() {
    echo "Halo, ini Fungsi dasar tanpa argumen !<br>";
}
salam();


// 2. Fungsi dengan 1 argumen
function sapa($nama) {
    echo "Halo, ini Fungsi dengan 1 argumen $nama!<br>";
}
sapa("Assatya");


// 3. Fungsi dengan lebih dari 1 argumen
function tambah($a, $b) {
    echo "Halo, ini Fungsi dengan lebih dari 1 argumen dan Hasil penjumlahan $a + $b = " . ($a + $b) . "<br>";
}
tambah(5, 7);


// 4. Fungsi dengan default value
function perkenalan($nama, $asal = "Madura") {
    echo "Halo, ini Fungsi dengan default value. nama saya $nama dari $asal.<br>";
}
perkenalan("Bima");        // pakai default value
perkenalan("Farhan", "Surabaya"); // override default value


// 5. Fungsi yang mengembalikan nilai (return)
function luasPersegi($sisi) {
    return $sisi * $sisi;
}
$hasil = luasPersegi(6);
echo "Halo, ini Fungsi yang mengembalikan nilai (return) dan Luas persegi dengan sisi 6 adalah: $hasil<br>";
?>
