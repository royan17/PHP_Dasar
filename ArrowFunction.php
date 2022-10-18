<?php 

// Arrow Function khusus untuk pembuatan function yang sederhana
// Arrow function dan anonymous function itu sama
$firstName = "Royan";
$lastName = "Husen";

// Anonymous Function
$anonymousFunction = function() use($firstName, $lastName): string {
    return "Hello Anonymous Function $firstName $lastName" . PHP_EOL;
};
echo $anonymousFunction();

// Arrow Function
$sayHello = fn() => "Hello Arrow Function $firstName $lastName" . PHP_EOL;

echo $sayHello();

?>