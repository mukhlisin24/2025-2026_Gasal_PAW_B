<?php
$nilai=90;

echo "$nilai <br>";

if ($nilai >= 0 && $nilai <= 40) {
    echo "NILAI E";
}elseif ($nilai > 40 && $nilai <= 65) {
    echo "NILAI C";
}elseif ($nilai > 65 && $nilai <= 80) {
    echo "NILAI B";
}
else{
    echo "NILAI A";
}
?>