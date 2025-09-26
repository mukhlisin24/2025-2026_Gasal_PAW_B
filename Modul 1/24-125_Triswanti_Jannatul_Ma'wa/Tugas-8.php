<?php
    $str = "makan bakso enak";

    echo "strlen: " . strlen($str) . "<br>";

    echo "str_word_count: " . str_word_count($str) . "<br>";

    echo "strrev: " . strrev($str) . "<br>";

    echo "strpos: " . strpos($str, "enak") . "<br>";

    echo "str_replace: " . str_replace("bakso","mi ayam", $str);

?>