<?php

// function foo() {
//     return 'hellow world';
// }

// echo foo();


// foo();
// bar();


// function foo() {
//     echo 'foo';
//     function bar() {
//         echo 'bar';
//     }
// }


// function foo(): int|float|array {
//     return [1.5];
// }

// var_dump(foo());

// function mixType(): mixed {
//     return [1.5];
// }

// var_dump(mixType());


declare(strict_types=1);

// function foo(int|float $x, int|float $y) {
//     return $x * $y;
// }

// $result = foo(5, 10.8);

// echo $result; //54 ???


# variable length args
function sum(...$numbers): int|float
{
    // $sum = 0;
    // foreach($numbers as $number) {
    //     $sum += $number;
    // }
    return array_sum($numbers);
}


// echo sum(1, 2, 3, 4, 5, 66, 77.7) . '<br>';
$sample = [1, 2, 3, 4, 5, 66, 77.7];
echo sum(...$sample);