<?php
$text = "Hello World";
echo "Teks: $text <br>";
echo "strlen(): " . strlen($text) . "<br>";
echo "str_word_count(): " . str_word_count($text) . "<br>";
echo "strrev(): " . strrev($text) . "<br>";
echo "strpos('World'): " . strpos($text, "World") . "<br>";
echo "str_replace(): " . str_replace("World", "PHP", $text) . "<br>";
?>