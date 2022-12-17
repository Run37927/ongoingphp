<?php

use Hamcrest\Number\IsCloseTo;

$isComplete = 'false';

// integer 0 = false
// integer -0 = false
// float 0.0 = false
// float -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

var_dump(is_bool($isComplete));

echo '<br>' . 'function starts' . '<br>';
if ($isComplete) {
    echo 'success';
} else {
    echo 'fail';
}