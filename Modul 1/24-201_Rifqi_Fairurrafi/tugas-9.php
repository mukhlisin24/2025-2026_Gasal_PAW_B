<?php
function Hello(){
    echo "Hello World";
}

function HelloWorld($text){
    echo $text;
}

function Barang($barang, $harga){
    echo "Produk $barang dijual dengan harga Rp $harga";
}

function Tinggi($nama = "Jane", $tinggibadan = 152){
    echo "$nama memiliki tinggi badan $tinggibadan";
}

function Discount($harga, $diskon){
    $result = $harga * ($diskon / 100);
    $result = $harga - $result;
    return $result;
}

Hello();
echo "<br>";
HelloWorld("echo");
echo "<br>";
Barang("Buku : Great Story", 4951);
echo "<br>";
Tinggi();
echo "<br>";
echo Discount(100000, 50);

?>