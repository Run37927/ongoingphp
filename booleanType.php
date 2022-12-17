<?php

use Hamcrest\Number\IsCloseTo;

$isComplete = 5;

// integer 0 = false
// integer -0 = false
// float 0.0 = false
// float -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false


if ($isComplete) {
    echo 'success';
} else {
    echo 'fail';
}