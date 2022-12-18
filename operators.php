<?php

$x = 10;
$y = 2;

echo $x / $y . '<br>'; // 5
echo $x ** $y . '<br>'; // 100

$x = '10';
var_dump($x); echo '<br>'; // string(2) "10"
var_dump(+$x); // int(10)