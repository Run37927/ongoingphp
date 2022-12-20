<?php
// introduced in PHP 8

$paymentStatus = 1;

match($paymentStatus) {
    1 => print 'paid',
    2 => print 'payment declined',
    3 => print 'pending payment',
};