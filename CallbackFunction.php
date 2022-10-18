<?php 

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "$finalName" . PHP_EOL;
}

sayHello("Royan", "strtoupper");
sayHello("Royan", "strtolower");

sayHello("Royan", function(string $name): string {
    return strtoupper($name);
});

sayHello("Royan", fn($name) => strtoupper($name));

?>