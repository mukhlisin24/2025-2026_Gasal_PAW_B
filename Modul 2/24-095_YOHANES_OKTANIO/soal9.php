<?php
    $nilai = 90;

    if ($nilai > 100) {
        echo "A+";
    } elseif ($nilai >= 90){
        echo "A";
    } elseif ($nilai >= 85){
        echo "B+";
    } elseif ($nilai >= 80) {
        echo "B";
    } elseif ($nilai >= 75) {
        echo "C+";
    } elseif ($nilai >= 70 ) {
        echo "C";
    } else {
        echo "D";
    }
?>