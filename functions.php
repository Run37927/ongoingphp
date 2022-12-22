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


function foo(): int|float|array {
    return [1.5];
}

var_dump(foo());