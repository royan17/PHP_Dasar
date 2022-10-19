<?php

$name = "Royan";
$otherName = &$name; // & reference arti buat dulicate dari $name

$otherName = "Budi";

echo $name . PHP_EOL;

// Pass By Reference
function increment(int &$value)
{
    $value++;
}
$counter = 1;
increment($counter);
echo $counter;

// returning references tidak disaran kan karena akan membingungkan
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;


?>