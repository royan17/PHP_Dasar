<?php

$name = "Royan Husen Fatih";

echo "Name : " . $name . PHP_EOL;
echo "Name : " . $name . "\n";

// Konversi tipe data
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

// mengakses karakter pada string
$name = "Royan";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

// Parsing data
echo "Hello " . $name . ", Selamat Beljar PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;


// Curly Brace: untuk menambahkan variable belakang nya string
$var = "Royyan";
echo "This is {$var}s" . PHP_EOL;

?>