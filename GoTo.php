<?php 

// Tidak rekomendasikan menggunakan GoTo Karena Semakin banyak menggunkan GoTo akan Membingungkan kode program kita

goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello B" . PHP_EOL;

$counter = 1;

while(true) {
    echo "Ini adalah GoTo ke-$counter" . PHP_EOL;
    $counter++;

    if($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";

?>