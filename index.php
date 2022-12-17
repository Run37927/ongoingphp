<?php

function sum(int $x, int $y)
{
    var_dump($x, $y);
    return $x + $y;
}

echo sum(2, 3);
