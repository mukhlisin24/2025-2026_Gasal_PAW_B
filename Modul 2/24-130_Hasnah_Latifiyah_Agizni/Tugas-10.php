<?php
$menu = [
    "Nasi pecel" => 15000,
    "Nasi goreng" => 12000,
    "Es Teh" => 5000,
    "Es Jeruk" => 6000
];

$total = 0;
$lanjut = "y";

while ($lanjut == "y") {
    $menu_dipilih = "Nasi pecel";  
    $jumlah = 2;                    
    if (isset($menu[$menu_dipilih])) {

        $harga = $menu[$menu_dipilih];
        $subtotal = $harga * $jumlah;

        echo "Menu: $menu_dipilih<br>";
        echo "Jumlah: $jumlah<br>";
        echo "Harga per item: Rp $harga<br>";
        echo "Subtotal: Rp $subtotal<br><br>";

        $total += $subtotal;
    } else {
        echo "Menu yang dipilih tidak tersedia.<br>";
    }
    $lanjut = "n"; 
}

echo "<hr>";
echo "Total yang harus dibayar: Rp $total<br>";
?>