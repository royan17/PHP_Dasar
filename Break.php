<?php 

while(true) {
    echo "Ini adalah Break ke-$counter" . PHP_EOL;
    $counter++;

    if($counter > 10) {
        break;
    }
}

?>