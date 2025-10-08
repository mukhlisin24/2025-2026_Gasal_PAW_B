<?php
$daftar_menu = [
    1 => ['nama' => 'Nasi Goreng', 'harga' => 15000],
    2 => ['nama' => 'Mie Ayam', 'harga' => 12000],
    3 => ['nama' => 'Sate Ayam', 'harga' => 20000],
    4 => ['nama' => 'Es Teh', 'harga' => 5000],
    5 => ['nama' => 'Es Jeruk', 'harga' => 7000]
];


$pesanan = [
    ['pilihan' => 1, 'jumlah' => 2], 
    ['pilihan' => 4, 'jumlah' => 3], 
    ['pilihan' => 5, 'jumlah' => 1]  
];

$total = 0;
$output = "";


foreach ($pesanan as $item) {
    $pilihan = $item['pilihan'];
    $jumlah = $item['jumlah'];

    // Cek apakah pilihan menu ada di $daftar_menu
    if (isset($daftar_menu[$pilihan])) {
        $menu_detail = $daftar_menu[$pilihan];
        $nama  = $menu_detail['nama'];
        $harga = $menu_detail['harga'];
    } else {
        $nama  = "Menu tidak valid";
        $harga = 0;
    }

    $subtotal = $harga * $jumlah;
    $total += $subtotal;
    $output .= "$nama x $jumlah = Rp " . number_format($subtotal, 0, ',', '.') . "<br>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Kasir Sederhana (Array)</title>
</head>
<body>
    <h2>Menu:</h2>
    <ul>
        <?php 
        foreach ($daftar_menu as $id => $detail) {
            echo '<li>' . $id . '. ' . $detail['nama'] . ' - Rp ' . number_format($detail['harga'], 0, ',', '.') . '</li>';
        }
        ?>
    </ul>
    
    <h3>Pesanan:</h3>
    <?php echo $output; ?>
    
    <h3>Total Harga: Rp <?php echo number_format($total, 0, ',', '.'); ?></h3>
</body>
</html>
