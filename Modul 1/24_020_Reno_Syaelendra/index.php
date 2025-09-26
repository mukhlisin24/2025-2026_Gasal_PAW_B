<?php
require 'koneksi.php'; // Hubungkan ke file koneksi

$keyword = "";
$sql = "SELECT * FROM buku ORDER BY judul ASC";

if (isset($_GET['search'])) {
    $keyword = $_GET['keyword'];
    // Gunakan prepared statement untuk keamanan
    $sql = "SELECT * FROM buku WHERE judul LIKE ? OR penulis LIKE ? ORDER BY judul ASC";
    
    $stmt = mysqli_prepare($koneksi, $sql);
    $search_keyword = "%" . $keyword . "%";
    mysqli_stmt_bind_param($stmt, "ss", $search_keyword, $search_keyword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
} else {
    // Jalankan query default jika tidak ada pencarian
    $result = mysqli_query($koneksi, $sql);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Koleksi Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            margin: 0 auto;
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .search-container {
            text-align: center;
            margin-bottom: 30px;
        }
        .search-container input[type="text"] {
            padding: 10px;
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .search-container input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease; 
        }
        .search-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        thead th {
            background-color: #4CAF50;
            color: white;
        }
        
        tbody tr:nth-child(even) {
            background-color: #f8f8f8;
        }
      
        tbody tr:hover {
            background-color: #e9e9e9;
            cursor: pointer;
        }
        .no-data {
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Daftar Koleksi Buku</h1>

        <div class="search-container">
            <form action="index.php" method="GET">
                <input type="text" name="keyword" placeholder="Cari judul atau penulis..." value="<?= htmlspecialchars($keyword) ?>">
                <input type="submit" name="search" value="Cari">
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No. Urut</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Halaman</th>
                    <th>Penerbit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $nomor = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?= $nomor++; ?></td>
                        <td><?= htmlspecialchars($row['judul']); ?></td>
                        <td><?= htmlspecialchars($row['penulis']); ?></td>
                        <td><?= htmlspecialchars($row['tahun_terbit']); ?></td>
                        <td><?= htmlspecialchars($row['jumlah_halaman']); ?></td>
                        <td><?= htmlspecialchars($row['penerbit'] ?? 'N/A'); ?></td>
                    </tr>
                <?php
                    }
                } else {
                    // Pesan jika data tidak ditemukan
                    echo '<tr><td colspan="6" class="no-data">Data tidak ditemukan.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php mysqli_close($koneksi); ?>
</body>
</html>