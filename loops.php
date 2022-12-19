<?php

$i = 0;
// while (true) {
//     while ($i > 10) {
//         break 2;
//     }
//     echo $i++ . '<br>';
// }


// while ($i <= 15):
//     if ($i % 2 == 0) {
//         $i++;
//         continue;
//     }
//     echo $i++ . '<br>';
// endwhile;


// do {
//     echo $i++ . ' ';
// } while ($i <= 15);


// for ($i; $i < 5; $i++) {
//     echo $i . ' ';
// }


// for ($i; $i < 5; print $i, $i++) {
//     // echo $i . ' ';
// }


$text = 'jello world';
for ($i; $i < strlen($text); $i++) {
    echo $text[$i] . '<br>';
}
