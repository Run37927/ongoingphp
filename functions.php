<?php

// function foo() {
//     return 'hellow world';
// }

// echo foo();


foo();
bar();


function foo() {
    echo 'foo';
    function bar() {
        echo 'bar';
    }
}