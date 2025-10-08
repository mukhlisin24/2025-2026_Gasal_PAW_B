<?php
$nilai = "77";
$mahasiswa = "Syadat";

if ($nilai >= 90){  // jika nilai diatas atau sama dengan 90 maka grade A
    $grade = "A";
    echo "$mahasiswa mendapatkan niali $grade : Ahh Belum Enginer!!";
} elseif ($nilai >= 80) { // jika nilai diatas atau sama dengan 80 maka grade B
    $grade = "B";
    echo "$mahasiswa mendapatkan niali $grade : Belum Enginer!!";
} elseif ($nilai >= 70) { // jika nilai diatas atau sama dengan 70 maka grade C
    $grade = "C";
    echo "$mahasiswa mendapatkan niali $grade : Calon Enginer!!";
} elseif ($nilai >= 60) { // jika nilai diatas atau sama dengan 60 maka grade D
    $grade = "D";
    echo "$mahasiswa mendapatkan niali $grade : Dikit lagi Enginer!!";
} else { // jika nilai dibawah 60 maka grade E
    $grade = "E";
    echo "Mantab $mahasiswa, kamu mendapatkan niali $grade : Enginer!!";
}