<?php 

$name ="Royan"; // global scoope

function sayHello() 
{
    global $name; // global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL; // super global: bisa akses variable dari mana saja
}
sayHello();

?>