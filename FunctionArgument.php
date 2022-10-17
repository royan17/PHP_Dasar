<?php 

function sayHello($name) {
    echo "Hello $name" . PHP_EOL;
}

sayHello("Royan");
sayHello("Budi");

// Default Argument value
function sayHelloTwo($name = "Anonymous") {
    echo "Hello Two $name" . PHP_EOL;
}

sayHelloTwo();
sayHelloTwo("Royyan Two");

// Kesalahan Default Argument Value
// paramter tidak berguna jika parameter pertama akan error
// untuk membuat "default argument di sarankan parameter di belakang
// salah
// function sayHelloTri($firstName = "Anonymous", $lastName) {
// benar
function sayHelloTri($firstName, $lastName = "") {
    echo "Hello $firstName $lastName" . PHP_EOL;
}
sayHelloTri("Royan", "Husen");

// di php function itu dinamis agar type data int maka
// menggunakan function type data seperti 'int'. jika butuh data fix tinggal masukan type data
function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);


// Variable-length Argument List
// implode: merubah array menjadi string
function sumAll(...$values) {
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    echo "Total sumAll " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

$values = [1,2,3,4,5];
sumAll(...$values);

sumAll(1,2,3,4,5,6);

?>