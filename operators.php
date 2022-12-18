<?php

$x = 10;
$y = 3;

var_dump($x / $y);
echo '<br>'; // float(3.3333333333333335)
var_dump($x % $y);
echo '<br>'; // int(1)

$x = '10';
var_dump($x);
echo '<br>'; // string(2) "10"
var_dump(+$x);
echo '<br>';  // int(10)

$a = 9;
$b = 0;

// var_dump($a / $b); Uncaught DivisionByZeroError: Division by zero in
var_dump(fdiv($a, $b));
echo '<br>';  //float(INF)


#================assignment=======================
echo '<br>' . '========assignment=======' . '<br>';
$p = $q = 10;
var_dump($p, $q);
echo '<br>';

$p = ($q = 10) + 5;
var_dump($p, $q);
echo '<br>'; // int(15) int(10)

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
echo '<br>';


$var1 = 'Hello There';
$var2 = strpos($var1, 'H');
var_dump($var2);
echo '<br>'; // int(0)

if ($var2 == false) {
    echo 'H not found';
} else {
    echo 'H found at index ' . $var2;
}

echo '<br>';
$result = $var2 === false ? 'H not found' : 'H found at index ' . $var2;
echo $result;
echo '<br>';

$f = null;
$g = $f ?? 'varnished';
var_dump($g); // g will be equal to varnished only if f equals to null, otherwise g will equal to whatever f is


#================error control operators=======================
echo '<br>' . '========error control operators=======' . '<br>';
$file_var = @file('foo.txt');
echo 'do not use @' . '<br>';
// without the @ surrepressing tag, error will show. DO NOT RECOMMEND


#================increment/decrement operators=======================
echo '<br>' . '========increment/decrement operators=======' . '<br>';

$demo_incre = 5;
echo $demo_incre++ . '<br>';
echo ++$demo_incre . '<br>';

$demo_incre_null = null;
echo ++$demo_incre_null . '<br>'; // 1

$demo_incre_string = 'abc';
echo ++$demo_incre_string . '<br>'; //abd and this doesn't make sense

#================logical operators=======================
echo '<br>' . '========logical operators=======' . '<br>';
$demo_bool_one = true;
$demo_bool_two = false;
$bizarre_one = $demo_bool_one and $demo_bool_two; // assignment has higher precedence than and, so true, and the rest gets disgarded


var_dump($demo_bool_one && $demo_bool_two); // false as expected
var_dump($demo_bool_one || $demo_bool_two); // true as expected, short-circuited
var_dump(!$demo_bool_one && $demo_bool_two); // negation, false as expected
var_dump($bizarre_one); // true
echo '<br>';
// && has higher precedence than ||


#================bitwise operators=======================
echo '<br>' . '========bitwise operators=======' . '<br>';
$demo_bit_one = 6;
$demo_bit_two = 3;

# 110
# 011 &
#-----
# 010 -> which is 2
echo $demo_bit_one & $demo_bit_two;
echo '<br>';

# 110
# 011 |
#-----
# 111 -> which is 7
echo $demo_bit_one | $demo_bit_two;
echo '<br>';

# 110
# 011 ^ XOR
#-----
# 101 -> which is 5
echo $demo_bit_one ^ $demo_bit_two;
echo '<br>';

# 110 -> turns into 001

# 001
# 011 &
#-----
# 001 -> which is 1
echo ~$demo_bit_one & $demo_bit_two;
echo '<br>';

# 0000 0110
# 0000 1100 shift once
# 0001 1000 shift twice
# 0011 0000 shift thrice
# 2^4 + 2^5 = 16 + 32 = 48
echo $demo_bit_one << $demo_bit_two;
echo '<br>';

#================array operators=======================
echo '<br>' . '========array operators=======' . '<br>';
$arr_demo_one = ['a', 'b', 'c'];
$arr_demo_two = ['d', 'e', 'f', 'g', 'h'];

$arr_result = $arr_demo_one + $arr_demo_two; // this will union the two arrays
echo '<pre>';
print_r($arr_result);
echo '</pre>';
/*
Array
(
    [0] => a
    [1] => b
    [2] => c
    [3] => g
    [4] => h
)
*/