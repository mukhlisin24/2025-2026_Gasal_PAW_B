<?php
$t = date("H");
if ($t < "10") {
  echo "Have a good day morning!";
}elseif ($t < "20") {
    echo "Have a good day!";
}
?>