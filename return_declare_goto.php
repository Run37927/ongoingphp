<?php

// function sum(int $x, int $y) {
//     return $x + $y;
// }

// $z = sum(5, 10);

// echo $z;

// return;

// echo 'hello world'; // won't be evaluated



// function onTick() {
//     echo 'tick <br>';
// }

// register_tick_function('onTick');

// declare(ticks=3);

// $i = 0;
// $length = 10;
// while ($i < $length) {
//     echo $i++ . '<br>';
// }


declare(strict_types=1);

function sum(int $x, int $y) {
    return $x + $y;
}

// echo sum('5', 10); //doesn't work