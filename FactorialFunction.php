<?php

// cara menggunakan Looping
function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
var_dump(factorialLoop(6));

// cara menggunakan recursive: memanggil function dirinya sendiri
function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(5));


// problem dengan recursive function
// 1. jika resursive terlalu dalam, maka ada kemungkinan terjadi memory overflow, yaitu error
//    dimana memory terlalu banyak digunakan PHP
// Kenapa probelm itu terjadi? Karena ketika kita memanggil function, PHP akan menyimpannya dalam stack
// jika function tersebut memanggil function lain, maka stack akan menumpuk terus, dan jik terlalu banyak
// maka akan membutuhkan konsumsi memory besar, jika terlewat batas maka akan terjadi error memory


// eror stack recursive
function loop(int $value){
    if ($value == 0) {
        echo "End loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}
loop(3000000);



?>