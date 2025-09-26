<?php
// Fungsi tanpa argumen
function halo(){
    echo "Halo, ini fungsi tanpa argumen<br>";
}

# Fungsi dengan 1 argumen
function sapa($nama){
    echo "Halo, $nama!<br>";
}

# Fungsi dengan return value
function tambah($x, $y){
    return $x + $y;
}

/* Fungsi dengan default value*/
function greet($nama = "Mahasiswa"){
    echo "Selamat datang, $nama!<br>";
}

# Pemanggilan fungsi
halo();
sapa("Abang");
echo "Hasil tambah: " . tambah(7,3) . "<br>";
greet();
greet("Bangkit");
