<?php
$nasigoreng = 15000;
$mieayam = 12000;
$airmineral = 5000;

$pesanan_1 = "Nasi Goreng";
$pesanan_2 = "Air Mineral";
$pesanan_3 = "";

$total_harga = 0;

echo "Pesanan: \n";

if ($pesanan_1 == "Nasi Goreng") {
    $total_harga = $total_harga + $nasigoreng;
    echo "<br>";
    echo "<br>";
    echo "- Nasi Goreng \n";
} elseif ($pesanan_1 == "Mie Ayam") {
    $total_harga = $total_harga + $mieayam;
    echo "<br>";
    echo "<br>";
    echo "- Mie Ayam \n";
}

if ($pesanan_2 == "Air Mineral") {
    $total_harga = $total_harga + $airmineral;
    echo "<br>";
    echo "<br>";
    echo "- Air Mineral \n";
}

if ($pesanan_3 == "Nasi Goreng") {
    $total_harga = $total_harga + $nasigoreng;
    echo "<br>";
    echo "- Nasi Goreng \n";
}

echo "<br>";
echo "<br>";
echo "Total: Rp" . $total_harga . "\n";
?>