<?php
//fungsi dasar tanpa argumen
function writeMsg() { 
    echo "Hello World!";
}
writeMsg();

//fungsi dengan 1 argumen
function familyName($fname) {
    echo "$fname Refsnes. <br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai");
familyName("Borge");

//fungsi dengan lebih dari 1 argumen
function fullName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}
fullName("Hege", "1975");
fullName("Stale", "1978");
fullName("Kai", "1983");

//fungsi dengan default value
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(); // akan menggunakan default value 50
setHeight(135);
setHeight(80);

//fungsi dengan mengembalikan nilai
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>