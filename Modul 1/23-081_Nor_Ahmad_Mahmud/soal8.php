<?php
$teks = "Belajar PHP itu menyenangkan";

echo "Teks: $teks <br>";
echo "strlen: " . strlen($teks) . "<br>";
echo "str_word_count: " . str_word_count($teks) . "<br>";
echo "strrev: " . strrev($teks) . "<br>";
echo "strpos('PHP'): " . strpos($teks, "PHP") . "<br>";
echo "str_replace: " . str_replace("menyenangkan", "mudah", $teks) . "<br>";
?>
