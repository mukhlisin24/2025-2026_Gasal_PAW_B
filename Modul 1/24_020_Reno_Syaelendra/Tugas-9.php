<?php
function sapa() {
    echo "Renos si Jungler Estes!<br>";
}

function hitungLuas($panjang, $lebar = 5) {
    return $panjang * $lebar;
}

sapa();
echo "Luas: " . hitungLuas(10);
?>