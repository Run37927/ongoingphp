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
print_r($programmingLanguages);
echo '</pre>';
echo count($programmingLanguages); // 3 meanings 3 elements in the array


echo '<br>';
$programmingLanguages[] = 'C++'; // will just push to the end of the array
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo count($programmingLanguages); // 4