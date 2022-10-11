<?php

// single quote
echo 'Name : ';
echo 'Royan Husen Fatih';
echo "\n";

// double quote
echo "Name : ";
echo "Royan\t Husen\t Fatih\n";

// heredoc: Fitur untuk membuat String yang panjang
echo<<<TEXT
Ini adalah contoh String yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga.
TEXT;

// nowdoc: tidak memiliki kemampuan parsing data
echo<<<'TEXT'
Ini adalah contoh String yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga.
TEXT




?>