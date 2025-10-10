<?php

    function satu() {
        echo "hai ma'wa <br>";
    }

    satu();

   function dua($nama) {
    echo "halloo,aku $nama <br>";
   }

   dua("ma'wa");

   function tiga($x,$y) {
    echo "total: " . ($x*$y) . "<br>";
   }

   tiga(4,8);

   function empat($nama = "nama anda") {
    echo "selamat datang, $nama <br>";
   }

   empat("ma'wa");
   empat();

   function lima($a, $b) {
    return $a + $b;
   }

   $hasil = lima(13, 9);
   echo "hasil: $hasil";
?>