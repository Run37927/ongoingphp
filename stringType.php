<?php

$first = 'will';
$last = 'smith';

$name = $first . ' ' . $last;

echo $name . '<br>';

echo $name[-1] . '<br>'; // h

$name[1] = 'a';

echo $name . '<br>';

// Heredoc
$text = <<<TEXT
line 1
line 2
line 3
TEXT;

echo nl2br($text);