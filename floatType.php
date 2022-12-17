<?php


$x = 13.5e3; //decimal shift to right 3
$y = 13.5e-3; // shift to left 3


echo $x . '<br>';
echo $y . '<br>';


$a = floor((0.1 + 0.7) * 10);
echo $a . '<br>';

$b = ceil((0.1 + 0.7) * 10);
echo $b . '<br>';

$c = ceil((0.1 + 0.2) * 10);
echo $c . '<br>';

$p = 0.23;
$q = 1 - 0.77;

var_dump($p, $q);

if ($p == $q) {
    echo 'yes';
} else {
    echo 'no';
}
// output: no

echo log(-1); // NAN
echo INF; // INF

echo '<br>';
$z = 5;
var_dump((float) $z);

$u = 'asdasd';
var_dump((float) $u);