<?php
function cek_nilai($nilai) {
 if ($nilai >= 88) {
 return "A";
 } elseif ($nilai >= 80) {
 return "B";
 } elseif ($nilai >= 72) {
 return "C";
 } elseif ($nilai >= 65) {
 return "D";
 } else {
 return "E";
 }
}
echo "Nilai 90 = " . cek_nilai(90) . "<br>";
echo "Nilai 87 = " . cek_nilai(87) . "<br>";
echo "Nilai 75 = " . cek_nilai(75) . "<br>";
echo "Nilai 70 = " . cek_nilai(70) . "<br>";
echo "Nilai 50 = " . cek_nilai(50) . "<br>";