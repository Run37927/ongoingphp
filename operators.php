<?php

$x = 10;
$y = 3;

var_dump($x / $y);echo '<br>'; // float(3.3333333333333335)
var_dump($x % $y);echo '<br>'; // int(1)

$x = '10';
var_dump($x); echo '<br>'; // string(2) "10"
var_dump(+$x); // int(10)

$a = 9;
$b = 0;

// var_dump($a / $b); Uncaught DivisionByZeroError: Division by zero in
var_dump(fdiv($a, $b)); //float(INF)