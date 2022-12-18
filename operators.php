<?php

$x = 10;
$y = 3;

var_dump($x / $y);echo '<br>'; // float(3.3333333333333335)
var_dump($x % $y);echo '<br>'; // int(1)

$x = '10';
var_dump($x); echo '<br>'; // string(2) "10"
var_dump(+$x);echo '<br>';  // int(10)

$a = 9;
$b = 0;

// var_dump($a / $b); Uncaught DivisionByZeroError: Division by zero in
var_dump(fdiv($a, $b));echo '<br>';  //float(INF)


#================assignment=======================
echo '<br>' . '========assignment=======' . '<br>';
$p = $q = 10;
var_dump($p, $q);echo '<br>'; 

$p = ($q = 10) + 5;
var_dump($p, $q);echo '<br>'; // int(15) int(10)

$k = 5;
$k += 10;
echo $k; // 15

#================string operators=======================
echo '<br>' . '========string operators=======' . '<br>';
$hello = 'hello';
$hello = $hello . ' world';
echo $hello;

#or
echo '<br>';
$hello .= ' again';
echo $hello;

#================comparison operators=======================
echo '<br>' . '========comparison operators=======' . '<br>';
$num1 = 5;
$num2 = '5';
var_dump($num1 == $num2);
echo '<br>';
var_dump($num1 === $num2); // strict comparison (including datatype)
echo '<br>';
var_dump($num1 != $num2); // false
echo '<br>';
var_dump($num1 !== $num2); // true
echo '<br>';
var_dump($num1 <> $num2); // false since it's still loose comparison
echo '<br>';
var_dump($num1 < $num2); // false
echo '<br>';
var_dump($num1 > $num2); // false
echo '<br>';
var_dump($num1 <= $num2); // true
echo '<br>';
var_dump($num1 >= $num2); // true
echo '<br>';
var_dump($num1 <=> $num2); // 0 if two are equal, -1 if num1 < num2, 1 if num1> num2