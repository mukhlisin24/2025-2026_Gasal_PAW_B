<?php
function tampilkanProduk($produk) {
    echo "<h3> Daftar Produk </h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Kode</th><th>Nama Produk</th><th>Harga</th></tr>";
    foreach ($produk as $kode => $item) {
        echo "<tr>";
        echo "<td>$kode</td>";
        echo "<td>{$item['nama']}</td>";
        echo "<td>Rp" . number_format($item['harga'], 0, ',', '.') . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}

function hitungTotal($produk, $pesanan) {
    $total = 0;
    echo "<h3> Detail Pesanan </h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Nama Produk</th><th>Jumlah</th><th>Harga</th><th>Subtotal</th></tr>";

    foreach ($pesanan as $kode => $jumlah) {
        if (isset($produk[$kode])) {
            $nama = $produk[$kode]['nama'];
            $harga = $produk[$kode]['harga'];
            $subtotal = $harga * $jumlah;
            $total += $subtotal;

            echo "<tr>";
            echo "<td>$nama</td>";
            echo "<td>$jumlah</td>";
            echo "<td>Rp" . number_format($harga, 0, ',', '.') . "</td>";
            echo "<td>Rp" . number_format($subtotal, 0, ',', '.') . "</td>";
            echo "</tr>";
        }
    }

    echo "<tr><th colspan='3' align='right'>Total</th><th>Rp" . number_format($total, 0, ',', '.') . "</th></tr>";
    echo "</table><br>";

    return $total;
}

function kasir() {
    $produk = [
        1 => ["nama" => "Kaos Polo", "harga" => 75000],
        2 => ["nama" => "Kemeja Lengan Panjang", "harga" => 120000],
        3 => ["nama" => "Jaket Jeans", "harga" => 200000],
        4 => ["nama" => "Celana Jeans", "harga" => 180000],
        5 => ["nama" => "Hoodie", "harga" => 150000],
    ];

    $pesanan = [
        1 => 2,
        3 => 1,
        5 => 1,
        2 => 2 
    ];

    echo "<h2>TOKO BAJU MURMER</h2>";
    tampilkanProduk($produk);
    $total = hitungTotal($produk, $pesanan);

    echo "<h3> Struk Pembayaran </h3>";
    echo "<p><b>Total Bayar: Rp" . number_format($total, 0, ',', '.') . "</b></p>";
    echo "<p>Terima kasih telah berbelanja di <b>TOKO BAJU MURMER</b>!</p>";
}

kasir();