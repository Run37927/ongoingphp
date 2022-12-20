<?php

require 'return_declare_goto.php';

echo sum('5', 10) . '<br>'; // ok here because strict type doesn't apply in a separate file


require 'bar.php';

$x++;
echo $x . '<br>'; // 6

require 'bar.php';
echo $x . '<br>'; // 5


/*
first time x becomes 6, makes sense

second time x is 5 because when you require the same file again, it overwrites x, so x is 5
*/