<?php 

for($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah Loop ke-$counter" . PHP_EOL;
}

for($counter = 10; $counter >= 1; $counter--) {
    echo "Ini adalah Loop ke-$counter" . PHP_EOL;
}

// cara alternatif For Loop
for($counter = 1; $counter <= 10; $counter++) :
    echo "Ini adalah Loop ke-$counter" . PHP_EOL;
endfor;

for($counter = 10; $counter >= 1; $counter--) :
    echo "Ini adalah Loop ke-$counter" . PHP_EOL;
endfor;


?>