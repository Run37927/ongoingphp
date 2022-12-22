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
// function sum(...$numbers): int|float
// {
//     // $sum = 0;
//     // foreach($numbers as $number) {
//     //     $sum += $number;
//     // }
//     return array_sum($numbers);
// }


// // echo sum(1, 2, 3, 4, 5, 66, 77.7) . '<br>';
// $sample = [1, 2, 3, 4, 5, 66, 77.7];
// echo sum(...$sample);


// function foo(int $x, int $y): int {
//     if ($x % $y === 0) {
//         return $x / $y;
//     }

//     return $x;
// }

// $x = 6;
// $y = 3;

// echo foo(y: $y, x: $x); // using named args, order doesn't matter any more

// function sum(...$numbers): int|float
// {
//     return array_sum($numbers);
// }

// $x = 'sum';
// // echo $x(1, 2, 3, 4); //php look for x, matches function name sum

// if (is_callable($x)) {
//     echo $x(1, 2, 3, 4);
// } else {
//     echo 'not callable';
// }


# anonymous function
// $sum = function (int|float ...$numbers): int|float {
//     return array_sum($numbers);
// }; // need the semicolon for anonymous function!

// echo $sum(1, 2, 3, 4);


// $array = [1, 2, 3, 4];

// $array2 = array_map(function ($element) {
//     return $element * 2;
// }, $array);

// echo '<pre>';
// print_r($array);

// print_r($array2);
// echo '</pre>';


# still mapping
// $sum = function (callable $callback, int ...$numbers): int {
//     return $callback(array_sum($numbers));
// }; // still anonymous

// echo $sum('foo', 1, 2, 3, 4); // call function sum, pass arguments

// function foo($element) {
//     return $element * 2;
// }


$array = [1, 2, 3, 4];

$array2 = array_map(fn($number) => $number * $number, $array);

echo '<pre>';
print_r($array2);
echo '</pre>';