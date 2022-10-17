<?php 

$counter = 1;
while($counter <= 10) {
    echo "Ini adalah While ke-$counter" . PHP_EOL;
    $counter++;
}

// Cara Alternatif While Loop
while($counter <= 10) :
    echo "Ini adalah While ke-$counter" . PHP_EOL;
    $counter++;
endwhile;

?>