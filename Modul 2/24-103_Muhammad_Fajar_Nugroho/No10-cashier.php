<?php
$menu = [
    1 => ['nama' => 'Nasi Goreng', 'harga' => 18000],
    2 => ['nama' => 'Mie Ayam', 'harga' => 15000],
    3 => ['nama' => 'Sate Ayam (5 tusuk)', 'harga' => 25000],
    4 => ['nama' => 'Es Teh', 'harga' => 5000],
    5 => ['nama' => 'Es Jeruk', 'harga' => 7000],
];

$keranjang = [];

echo "=== SISTEM KASIR ===\n";

while (true) {
    echo "\n------ MENU ------\n";
    foreach ($menu as $kode => $item) {
        $harga = number_format($item['harga'], 0, ',', '.');
        printf("%d. %s - Rp%s\n", $kode, $item['nama'], $harga);
    }
    echo "------------------\n";
    $pilihan = readline("Pilih kode menu (masukkan 9 untuk selesai): ");
    if ($pilihan == 9) {
        break;
    }
    if (!isset($menu[$pilihan])) {
        continue;
    }
    $item = $menu[$pilihan];
    $qty = readline("Masukkan jumlah '{$item['nama']}' yang dibeli: ");
    $subtotal = $item['harga'] * $qty;
    $keranjang[] = [
        'kode' => $pilihan,
        'nama' => $item['nama'],
        'harga' => $item['harga'],
        'qty' => $qty,
        'subtotal' => $subtotal
    ];
    echo "Ditambahkan: {$item['nama']} x{$qty} = Rp" . number_format($subtotal, 0, ',', '.') . "\n";
    $lanjut = strtolower(readline("Tambah item lagi? (y/n): "));
    if ($lanjut != 'y') {
        break;
    }
}

$total = 0;
echo "\n\n===== STRUK PEMBELIAN =====\n";
echo "Nama\t\tQty\tSubtotal\n";
echo "--------------------------------\n";
foreach ($keranjang as $row) {
    $subtotal_fmt = "Rp" . number_format($row['subtotal'], 0, ',', '.');
    echo "{$row['nama']}\t{$row['qty']}\t{$subtotal_fmt}\n";
    $total += $row['subtotal'];
}
echo "--------------------------------\n";
echo "TOTAL\t\t\tRp" . number_format($total, 0, ',', '.') . "\n";
echo "============================\n";
