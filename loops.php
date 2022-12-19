<?php

$i = 0;
while (true) {
    while ($i > 10) {
        break 2;
    }
    echo $i++ . '<br>';
}
