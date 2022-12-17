<?php

$programmingLanguages = ['php', 'java', 'python'];

echo $programmingLanguages[1]; // java
echo $programmingLanguages[-1]; // undefined key
echo $programmingLanguages[3]; // undefined key

var_dump(isset($programmingLanguages[3])); // bool(false) meaning it doesn't exist
var_dump(isset($programmingLanguages[1])); // bool(true)

$programmingLanguages[1] = 'C';

echo $programmingLanguages[1]; // C

echo '<br>';

echo '<pre>';
print_r($programmingLanguages); //Array ( [0] => php [1] => C [2] => python )
echo '</pre>';