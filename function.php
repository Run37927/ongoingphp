<?php

declare(strict_types=1);

function sum(float $x, float $y)
{
    return $x + $y;
}

$sum = sum(2, 3);
echo $sum . '<br>';

var_dump($sum);

$x = (int)'5';

var_dump($x);
