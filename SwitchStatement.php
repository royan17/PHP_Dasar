<?php

$nilai = "d";

// disaran kan menggunakan cara ini
switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus";
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}

// cara alternatif
switch ($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus";
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
endswitch;

?>