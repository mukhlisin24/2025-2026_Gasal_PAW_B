<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good day!";
}elseif ($t < "20") {
    echo "Have a good afternoon!";
}else{
    echo "Have a good night!";
}
?>