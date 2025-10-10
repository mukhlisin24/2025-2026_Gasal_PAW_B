<?php
// Daftar menu dan harga
$menu = ["Nasi Goreng", "Mie Ayam", "Es Teh", "Kopi"];
$harga_menu = [15000, 12000, 5000, 7000];

$total = 0;
$jml_menu = 4;

// Proses pemesanan
$pilihan  = [1, 3, 4];
$jumlah   = [2, 1, 2];
$jml_beli = 3;           

echo "<h2><b>Daftar Menu:</b></h2>";

for ($i = 0; $i < $jml_menu; $i++) {
    echo ($i + 1) . ". " . $menu[$i] . " - Rp" . $harga_menu[$i] . "<br>";
}

echo "<br><b>Pesanan:</b><br>";

// Menampilkan pesanan dan menghitung total
for ($i = 0; $i < $jml_beli; $i++) {
    $index = $pilihan[$i] - 1;
    $nama = $menu[$index];
    $harga = $harga_menu[$index];
    $beli = $jumlah[$i];
    $subtotal = $harga * $beli;
    $total += $subtotal;

    echo "$nama x $beli = Rp$subtotal<br>";
}

// Total akhir
echo "<br><b>Total Bayar: Rp$total</b><br>";
echo "Terima kasih telah berbelanja!";
?>
