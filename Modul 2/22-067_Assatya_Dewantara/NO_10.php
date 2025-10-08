<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kasir Sederhana</title>
</head>
<body>
    <h2>Menu Kasir</h2>
    <?php
    // Daftar menu
    $menu = [
        1 => ["nama" => "Nasi Goreng", "harga" => 15000],
        2 => ["nama" => "Mie Ayam", "harga" => 12000],
        3 => ["nama" => "Es Teh", "harga" => 5000],
        4 => ["nama" => "Es Jeruk", "harga" => 7000],
        5 => ["nama" => "Selesai", "harga" => 0]
    ];

    session_start();
    if (!isset($_SESSION['total'])) {
        $_SESSION['total'] = 0;
        $_SESSION['pesanan'] = [];
    }

    // Jika ada input
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pilihan = $_POST['pilihan'] ?? 0;

        if ($pilihan > 0 && $pilihan < 5) {
            $_SESSION['pesanan'][] = $menu[$pilihan]["nama"] . " - Rp" . $menu[$pilihan]["harga"];
            $_SESSION['total'] += $menu[$pilihan]["harga"];
        } elseif ($pilihan == 5) {
            echo "<h3>Daftar Pesanan:</h3>";
            foreach ($_SESSION['pesanan'] as $item) {
                echo "- $item <br>";
            }
            echo "<b>Total Bayar: Rp" . $_SESSION['total'] . "</b><br><br>";

            echo "<a href='?reset=1'>Transaksi Baru</a>";
            exit;
        }
    }

    // Reset transaksi
    if (isset($_GET['reset'])) {
        session_destroy();
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

    // Reset hanya pesanan (tidak keluar dari transaksi)
    if (isset($_GET['reset_pesanan'])) {
        $_SESSION['pesanan'] = [];
        $_SESSION['total'] = 0;
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

    // Tampilan menu
    echo "<form method='post'>";
    echo "<p>Pilih Menu:</p>";
    foreach ($menu as $key => $item) {
        echo "$key. {$item['nama']} - Rp{$item['harga']}<br>";
    }
    echo "<input type='number' name='pilihan' min='1' max='5' required>";
    echo "<input type='submit' value='Pilih'>";
    echo "</form>";

    // Menampilkan pesanan sementara
    if (!empty($_SESSION['pesanan'])) {
        echo "<h3>Pesanan Sementara:</h3>";
        foreach ($_SESSION['pesanan'] as $item) {
            echo "- $item <br>";
        }
        echo "<b>Total Sementara: Rp" . $_SESSION['total'] . "</b><br><br>";
        echo "<a href='?reset_pesanan=1' onclick=\"return confirm('Yakin reset semua pesanan?');\">Reset Pesanan</a>";
    }
    ?>
</body>
</html>
