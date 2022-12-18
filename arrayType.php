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
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019']
        ]
    ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
    ],
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


echo $programmingLanguages['php']['website']; //www.php.net
echo '<br>';
echo $programmingLanguages['php']['versions'][0]['releaseDate']; //Nov 26, 2020


$arr = ['a', 'b', 50 => 'c', 'd', 'e'];
echo '<pre>';
print_r($arr);
echo '</pre>';
/* 
because 50 is the biggest key here, everything after that will start from 50

output:

Array
(
    [0] => a
    [1] => b
    [50] => c
    [51] => d
    [52] => e
)

*/


echo array_pop($arr); // pops the last element

echo '<pre>';
print_r($arr);
echo '</pre>';

/*
Array
(
    [0] => a
    [1] => b
    [50] => c
    [51] => d
)
*/


echo array_shift($arr); // pops the first element

echo '<pre>';
print_r($arr);
echo '</pre>';

/*
Array
(
    [0] => b
    [1] => c
    [2] => d
)
*/

unset($arr[0]); // destory certain element (will not re-index elements)
echo '<pre>';
print_r($arr);
echo '</pre>';

/*
Array
(
    [1] => c
    [2] => d
)
*/


// most bizarre
$another_arr = [1, 2, 3];
unset($another_arr[0], $another_arr[1], $another_arr[2]); // destroy all elements one by one
$another_arr[] = 1; // add a new element to the array

echo '<pre>';
print_r($another_arr);
echo '</pre>';

/*
Array
(
    [3] => 1
)

UNSET WILL NOT RE-INDEX ELEMENTS
*/


$x = 5;
var_dump((array) $x); // will cast it to be the first element in the array

echo '<br>';

$y = null;
var_dump((array) $y); // will cast it to be an empty array
