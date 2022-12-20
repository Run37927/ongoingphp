<?php
// introduced in PHP 8

$paymentStatus = 1;


// match is a expression, thus evaluates to a value
$paymentStatusDisplay = match ($paymentStatus) {
    1 =>  'paid',
    2 =>  'payment declined',
    3 =>  'pending payment',
};

echo $paymentStatusDisplay;
