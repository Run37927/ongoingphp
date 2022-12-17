<?php

//constants

// define('STATUS_PAID', 'paid'); runtime

// echo defined('STATUS_PAID');



// const STATUS_PAID = 'paid'; // compile time

// echo STATUS_PAID;

if (1) {
    // const FOO = 'bar'; doesnt work
    define('STATUS_PAID', 9);
}