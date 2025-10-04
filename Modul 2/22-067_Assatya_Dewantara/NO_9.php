<!DOCTYPE html>
<html>
<head>
    <title>Grade Nilai Mahasiswa dengan Switch</title>
</head>
<body>
    <h2>Input Nilai Mahasiswa</h2>
    <form method="post">
        Masukkan Nilai: <input type="number" name="nilai" min="0" max="100" required>
        <input type="submit" value="Cek Grade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];

        if ($nilai >= 85 && $nilai <= 100) {
            $grade = "A";
        } elseif ($nilai >= 75) {
            $grade = "B";
        } elseif ($nilai >= 65) {
            $grade = "C";
        } elseif ($nilai >= 50) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        // Membagi nilai jadi kategori puluhan
        $kategori = floor($nilai / 10);

        switch ($kategori) {
            case 10: // untuk nilai 100
            case 9:  // 90 - 99
            case 8:  // 80 - 89
                echo "<h3>Hasil:</h3>";
        		echo "Nilai Anda: <b>$nilai</b><br>";
        		echo "Grade: <b>$grade</b><br>";
        		echo "Grade: <b>Nilai sangat bagus pertahankan</b>";
                break;
            case 7:  // 70 - 79
                echo "<h3>Hasil:</h3>";
        		echo "Nilai Anda: <b>$nilai</b><br>";
        		echo "Grade: <b>$grade</b><br>";
        		echo "Grade: <b>Nilai cukup bagus tingkatkan lagi</b>";
                break;
            case 6:  // 60 - 69
                echo "<h3>Hasil:</h3>";
        		echo "Nilai Anda: <b>$nilai</b><br>";
        		echo "Grade: <b>$grade</b><br>";
        		echo "Grade: <b>Nilai kurang bagus lebih tingkatkan lagi</b>";
                break;
            case 5:  // 50 - 59
                echo "<h3>Hasil:</h3>";
        		echo "Nilai Anda: <b>$nilai</b><br>";
        		echo "Grade: <b>$grade</b><br>";
        		echo "Grade: <b>Nilai cukup jelek belajar yang giat</b>";
                break;
            default: // < 50
                echo "<h3>Hasil:</h3>";
        		echo "Nilai Anda: <b>$nilai</b><br>";
        		echo "Grade: <b>$grade</b><br>";
        		echo "Grade: <b>Nilai cukup jelek belajar lebih giat</b>";
        }

    }
    ?>
</body>
</html>
