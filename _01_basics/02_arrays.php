<?php
include 'helpers.php';

newSection('Arrays', true);

echo "All arrays in PHP are associative arrays (hashmaps in some languages)!!\n";

$oldArray = array('One' => 1, 'Two' => 2, 'Three' => 3);
$newArray = ['One' => 1, 'Two' => 2, 'Three' => 3];
$normalArray = [5, 10, 15, 20, 25];

$newArray['Four'] = 4;
$normalArray[] = "last!";

echo "{$oldArray['One']}, {$newArray['Two']}, {$newArray['Four']}, {$normalArray[3]}, {$normalArray[5]}";

unset($normalArray[2]); // remove element from array.

echo "\n\n";
echo '$oldArray => ';
print_r($oldArray);

echo "\n", '$newArray => ';
print_r($newArray);

echo "\n", '$normalArray => ';
print_r($normalArray);