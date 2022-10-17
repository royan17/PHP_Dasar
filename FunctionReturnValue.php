<?php 

// di function hanya bisa mengembalikan 1d data
function sum(int $first, int $last) {
    $total = $first + $last;
    return $total;
}

$result = sum(10, 10);
var_dump ($result);


?>