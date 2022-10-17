<?php 

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionDipanggil = "foo";
$functionDipanggil();

$functionDipanggil = "bar";
$functionDipanggil();

// manipulasi function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Royan", "sampleFunction");
sayHello("Royan", "strtoupper");
sayHello("Royan", "strtolower");

?>