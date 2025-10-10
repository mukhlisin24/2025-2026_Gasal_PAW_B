<?php
    function sayHello() {
    echo "fungsi tanpa argumen!<br>";
}
sayHello();

function greet($name) {
    echo "Halo, $name!<br>";
}
greet("Abid");

function tambah($x, $y) {
    echo "$x + $y = " . ($x + $y) . "<br>";
}
tambah(5, 7);

function sapa($nama = "AbidKal") {
    echo "Selamat datang, $nama!<br>";
}
sapa();
sapa("Doni");

function kali($x, $y) {
    return $x * $y;
}
echo "Hasil kali 4 * 5 = " . kali(4, 5) . "<br>";

?>