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


function foo(int $x, int $y) {
    return $x * $y;
}

$result = foo(5, 10);

echo $result;