<?php 

// Operasi Union Menggabungkan 2 array
$first = [
    "first_name" => "Royan"
];

$last = [
    "last_name" => "Husen"
];

$full = $first + $last;
var_dump($full);


// Membandingkan data array
$a = [
    "first_name" => "Royan",
    "last_name" => "Husen"
];

$b = [
    "last_name" => "Husen",
    "first_name" => "Royan",
];

var_dump($a == $b);
var_dump($a === $b);

?>