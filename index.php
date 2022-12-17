<?php

#4 scalar types
    # bool
    # int
    # float
    # string

$completed = true;
$paid = false;
$score = 88;
$price = 0.99;
$greeting = 'hello john';

echo $completed . '<br>';
echo $paid  . '<br>';
echo $score . '<br>';
echo $price . '<br>';
echo $greeting . '<br>';

echo gettype($paid);