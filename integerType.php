<?php

echo 'max int = ' . PHP_INT_MAX . '<br>';
echo 'min int = ' . PHP_INT_MIN . '<br>';
echo 'int size = ' . PHP_INT_SIZE . '<br>';

# output
# max int = 9223372036854775807
# min int = -9223372036854775808
# int size = 8

$x = 0x2A;
$y = 055;
$z = 0b111;
echo $x . '<br>';
echo $y . '<br>';
echo $z . '<br>';