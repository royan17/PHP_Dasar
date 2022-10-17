<?php

$gender = "PRIA";
$hi = null;

if ($gender == "PRIA") {
    $hi = "Hi bro!";
}else {
    $hi = "Hi nona";
}
echo $hi . PHP_EOL;

// diatas bisa di singkat satu baris menggunakan "Ternary Operator"
$hi == $gender ? "Hi bro!" : "Hi nona";

echo $hi . PHP_EOL;

?>