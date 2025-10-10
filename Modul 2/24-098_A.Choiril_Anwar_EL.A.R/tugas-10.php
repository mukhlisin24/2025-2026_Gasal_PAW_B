<?php
$total = 0;    
$ulang = 1;     

while ($ulang <= 3) {
    echo "MENU KASIR<br>";
    echo "1. Nasi Goreng - Rp15000<br>";
    echo "2. Mie Ayam - Rp12000<br>";
    echo "3. Es Teh - Rp5000<br>";
    echo "4. Joshua - Rp7000<br><br>";

    if ($ulang == 1) {
        $pilihan = 1; $jumlah = 1;
    } elseif ($ulang == 2) {
        $pilihan = 3; $jumlah = 1; 
    } else {
        $pilihan = 4; $jumlah = 1;
    }

    if ($pilihan == 1) {
        $menu = "Nasi Goreng";
        $harga = 15000;
    } elseif ($pilihan == 2) {
        $menu = "Mie Ayam";
        $harga = 12000;
    } elseif ($pilihan == 3) {
        $menu = "Es Teh";
        $harga = 5000;
    } elseif ($pilihan == 4) {
        $menu = "Joshua";
        $harga = 7000;
    } else {
        $menu = "Tidak dikenal";
        $harga = 0;
    }

    $subtotal = $harga * $jumlah;
    echo "Anda membeli $jumlah $menu = Rp$subtotal<br><br>";
    $total += $subtotal;
    $ulang++;
}
echo "<hr>";
echo "Total yang harus dibayar: Rp$total<br>";
?>