<?php
echo "Decimal: ";
var_dump(12345);

echo "Octal: ";
var_dump(012345);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(0b1111);

echo "Underscore in number: ";
var_dump(123_123_123);

// klo tambah titik otomatis menjadi Floating Point
echo "Floating Point: ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e6);

echo "Floating Point dengan E notation minus (7 x 0.0001) : ";
var_dump(7e-3);

echo "Underscore Floating Point: ";
var_dump(123_123.123);

echo "Integer Overflow: ";
var_dump(9223372036854775808);

?>