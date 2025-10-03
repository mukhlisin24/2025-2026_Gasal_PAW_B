<?php
$menu = [
    1 => ["nama" => "Nasi Goreng", "harga" => 15000],
    2 => ["nama" => "Mie Ayam", "harga" => 12000],
    3 => ["nama" => "Soto Ayam", "harga" => 10000],
    4 => ["nama" => "Es Teh", "harga" => 5000],
    5 => ["nama" => "Jus Jeruk", "harga" => 8000],
];

$total = 0;

//?menu=1,2&jumlah=2,3l
$pilihan = $_GET['menu'] ?? null;
$jumlah  = $_GET['jumlah'] ?? null;

if ($pilihan && $jumlah) {
    $pilihanArr = explode(",", $pilihan);
    $jumlahArr  = explode(",", $jumlah);

    echo "=== MENU KASIR ===<br>";

    foreach ($pilihanArr as $i => $id) {
        if (isset($menu[$id])) {
            $jml = isset($jumlahArr[$i]) ? (int)$jumlahArr[$i] : 1;
            $subtotal = $menu[$id]['harga'] * $jml;
            $total += $subtotal;

            echo "Beli {$menu[$id]['nama']} x $jml = Rp $subtotal<br>";
        }
    }

    echo "<br><b>Total Bayar = Rp $total</b>";
} else {
    echo "Silakan masukkan pilihan menu lewat URL.<br>";
    echo "Contoh: <br>";
    echo "http://localhost/kasir.php?menu=1,2&jumlah=2,3<br>";
    echo "(artinya: beli Nasi Goreng 2 porsi + Mie Ayam 3 porsi)";
}
?>
