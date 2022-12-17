<?php

$programmingLanguages = ['php', 'java', 'python'];

echo $programmingLanguages[1]; // java
echo $programmingLanguages[-1]; // undefined key
echo $programmingLanguages[3]; // undefined key

var_dump(isset($programmingLanguages[3])); // bool(false) meaning it doesn't exist
var_dump(isset($programmingLanguages[1])); // bool(true)

$programmingLanguages[1] = 'C';

echo $programmingLanguages[1]; // C


echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo count($programmingLanguages); // 3 meanings 3 elements in the array


$programmingLanguages[] = 'C++'; // will just push to the end of the array
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo count($programmingLanguages); // 4

array_push($programmingLanguages, 'Elixir', 'Ocaml', 'Rust');
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


// dictionary  or associative array
$programmingLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php']; // access value via key