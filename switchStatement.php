<?php

$paymentStatus = 'paid';

switch($paymentStatus) {
    case 'paid':
        echo 'paid';
        break;
    
    case 'declined':
        echo 'payment declined';
        break;
    
    case 'pending':
        echo 'pending payment';
        break;
    
    default:
        echo 'unknown payment status';
}