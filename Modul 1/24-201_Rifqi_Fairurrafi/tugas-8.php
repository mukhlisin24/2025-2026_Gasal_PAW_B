<?php
$string = "Tell me fool if i continue to regress, will i ever get to meet you again";

echo "String : $string <br>";
echo "Panjang string : " . strlen($string) . "<br>";
echo "Jumlah kata pada string : " . str_word_count($string) . "<br>";
echo "String terbalik: " . strrev($string) . "<br>";
echo "Posisi substring : " . strpos($string, "you") . "<br>";
echo "Timpa String : " . str_replace("you", "Kim Dokja", $string) . "<br>";
?>