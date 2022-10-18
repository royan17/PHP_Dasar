<?php 

$sayHello = function(string $name) {
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Royan");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName". PHP_EOL;
}

sayGoodBye("Royan", function(string $name): string
{
    return strtoupper($name);
});

$filterFunction = function(string $name): string
{
    return strtolower($name);
};
sayGoodBye("Royan", $filterFunction);


// mengakses di luar variable menggunakan "use"
$firstName = "Royan";
$lastName = "Husen";

$sayHelloRoyan = function() use($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloRoyan();

?>