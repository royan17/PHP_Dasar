<?php

$values = array(1, 2, 3, 5, 7.6);
// var_dump($values);

$number = [1, 2, 3, 4, 5, 1.2];
// var_dump($number);

$names = ["Royyan", "Husen", "Fatih"];
// var_dump($names);

/* mengambil data array */
var_dump($names[0]);

/* ubah data array */
$names[0] = "Budi";
var_dump($names[0]);

/* Hapus data array */
unset($names[0]);
var_dump($names);

/* menambahkan data array */
$names[] = "Joko";
var_dump($names);

/* hitung data array */
var_dump(count($names));

/* di PHP array Map sama saja*/
// cara 1
$data = array(
    "id" => "royan007",
    "name" => "Royyan",
    "age" => 28,
);
// var_dump($data);
// var_dump($data['name']);

// cara 2
$data2 = [
    "id" => "budi01",
    "name" => "Budiman",
    "age" => 29,
];
// var_dump($data2);

/* Array di dalam Array */
$data3 = array(
    "id" => "royan007",
    "name" => "Royyan",
    "age" => 28,
    "address" => array(
        "city" => "Tangerang",
        "Country" => "Banten",
    )
);

var_dump($data3["address"]["city"]);

?>