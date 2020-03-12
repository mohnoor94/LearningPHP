<?php
include "../utils/helpers.php";

newSection('Arrays', true);

echo "All arrays in PHP are associative arrays (hashmaps in some languages)!!\n";

$oldArray = array('One' => 1, 'Two' => 2, 'Three' => 3);
$newArray = ['Two' => 2, 'One' => 1, 'Three' => 3];
$normalArray = [5, 10, 15, 20, 25];

$newArray['Four'] = 4;
$normalArray[] = "last!";

echo "{$oldArray['One']}, {$newArray['Two']}, {$newArray['Four']}, {$normalArray[3]}, {$normalArray[5]}";

echo "\n\n";
echo '$oldArray => ';
print_r($oldArray);

echo "\n", '$newArray => ';
print_r($newArray);

echo "\n", '$normalArray => ';
print_r($normalArray);

// =====================================================================================================================
newSection('Array Functions');

// check if key exists in an array
echo array_key_exists(3, $normalArray), "\n";
echo array_key_exists('Two', $newArray), "\n";

lines(2);

// check if value exists in an array
echo in_array(10, $normalArray), "\n";
echo in_array(2, $newArray), "\n";
echo in_array(2, $newArray, true), "\n";  # check for the type

lines(3);

// remove last element
array_pop($normalArray);
print_r($normalArray);

lines(3);

// remove any element
unset($normalArray[2]);
print_r($normalArray);

lines(2);

// count members
echo count($newArray);

// =====================================================================================================================
newSection('Arrays Sort');

$anotherArray = [6, 3, 'apple', 'hi', 10, 'hello'];
print_r($anotherArray);
lines(3);

asort($anotherArray);  # preserve keys
print_r($anotherArray);
lines(3);

sort($anotherArray);  # reassign keys
print_r($anotherArray);
lines(5);

print_r($newArray);
lines(3);

ksort($newArray);  # sort by keys
print_r($newArray);
lines(3);

// =====================================================================================================================
newSection('Multidimensional Array');

$mulArray = [
    'a' => 1,
    'b' => 2,
    'c',
    'd',
    'e' => [
        'A' => 10,
        'B' => 20,
        'C',
        'D'
    ],
    'f',
    'g' => 5,
    100 => 'h',
    'i',
    'j'
];

echo count($mulArray), "\n";
echo count($mulArray, true), "\n";  # count internal arrays' members
print_r($mulArray);