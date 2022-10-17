<?php 

// tanpa for Each
$names = ["Royan", "Husen", "Fatih"];

for($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

// ForEach
foreach($names as $name) {
    echo "Data menggunakan ForEach: $name" . PHP_EOL;
}

$person = [
    "first_name" => "Royan",
    "middle_name" => "Husen",
    "last_name" => "Fatih",
];

foreach($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

?>