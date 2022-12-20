<?php

$paymentStatus = 'rejected';

switch($paymentStatus) {
    case 'paid':
        echo 'paid';
        break;
    
    case 'rejected':
    case 'declined':
        echo 'payment declined';
        break;
    
    case 'pending':
        echo 'pending payment';
        break;
    
    default:
        echo 'unknown payment status';
}


function func() {
    sleep(3);
    echo 'done <br>';
    return 3;
}

// slightly faster than if statement
switch(func()) {
    case 1:
        echo 1;
        break;
    
    case 2:
        echo 2;
        break;
    
    case 3:
        echo 3;
        break;
    
    default:
        echo 4;
}