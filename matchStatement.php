<?php
// introduced in PHP 8

$paymentStatus = 3;


// match is a expression, thus evaluates to a value
$paymentStatusDisplay = match ($paymentStatus) {
    1 =>  'paid',
    2,3 =>  'payment declined', // 2 or 3 will print payment declined
    0 =>  'pending payment',
};

echo $paymentStatusDisplay;
