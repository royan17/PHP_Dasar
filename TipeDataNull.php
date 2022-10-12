<?php
$name = "Royan";
$name = NULL;
echo "Name\t :";
echo $name;
echo "\n";

$age = null;
echo "Age\t :";
echo $age;
echo "\n";

// mengecek tipe data null
echo "is name null? :";
var_dump(is_null($name));
echo "\n";

// variable unset menghapus variable
// hati2 menggunakan variable unset, tidak dapat diakses  variable tsb bahkan function is_null pun error
// solusi menggunakan isset
$contoh = "Royan";
unset($contoh);
// echo $contoh;

$contoh = "Husen";
$contoh = null;
var_dump(isset($contoh));



?>