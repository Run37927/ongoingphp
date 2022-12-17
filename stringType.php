<?php

$first = 'will';
$last = 'smith';

$name = $first . ' ' . $last;

echo $name . '<br>';

echo $name[-1] . '<br>'; // h

$name[1] = 'a';

echo $name . '<br>';


$x = 'hey';
$y = 'whatsup';
// Heredoc
$text = <<<TEXT
line 1 $x
line 2 $y
line 3
<div>
    <p> whats going on? </p>
    <p> hello html </p>
</div>
TEXT;

echo nl2br($text);
echo '<br>';
echo '<br>';


//Nowdoc
$text = <<<'TEXT'
line 1 $x
line 2 $y
line 3
TEXT;

echo nl2br($text);