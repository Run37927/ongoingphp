<?php

$i = 0;
// while (true) {
//     while ($i > 10) {
//         break 2;
//     }
//     echo $i++ . '<br>';
// }


while ($i <= 15):
    if ($i % 2 == 0) {
        $i++;
        continue;
    }
    echo $i++ . '<br>';
endwhile;