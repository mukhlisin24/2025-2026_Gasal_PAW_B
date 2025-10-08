<?php
# Fungsi dasar tanpa argumen
function matkul() {
    echo "Pemrograman Aplikasi Web<br>";
}

# Fungsi dengan 1 argumen
function salam($orang) {
    echo "Selamat datang, $orang!<br>";
}

# Fungsi dengan lebih dari 1 argumen
function hitungJumlah($x, $y) {
    echo "$x ditambah $y hasilnya = " . ($x + $y) . "<br>";
}

# Fungsi dengan default value
function kenalan($nama = "Pengunjung") {
    echo "Halo semuanya, saya $nama.<br>";
}

# Fungsi yang mengembalikan nilai (return)
function kaliAngka($m, $n) {
    return $m * $n;
}

# Pemanggilan fungsi
matkul();
salam("Adi");
hitungJumlah(8, 12);
kenalan();
kenalan("Andi");
$hasil = kaliAngka(3, 9);
echo "Perkalian 3 x 9 = $hasil<br>";
?>