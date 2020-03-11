<?php
include "../utils/helpers.php";

newSection("Logic", true);
// Or... the stupid logic :3
// This file has no output!

$a = 0;
$b = '0';
$c = '1';
$d = '1';

// assert throws a warning if its argument is not true

// These comparisons will always be true, even if the types aren't the same.
assert($a == $b); // equality
assert($c != $a); // inequality
assert($c <> $a); // alternative inequality
assert($a < $c);
assert($c > $b);
assert($a <= $b);
assert($c >= $d);

// The following will only be true if the values match and are the same type.
assert($c === $d);
assert($a !== $d);
assert(1 === '1');
assert(1 !== '1');

// 'Spaceship' operator (since PHP 7)
// Returns 0 if values on either side are equal
// Returns 1 if value on the left is greater
// Returns -1 if the value on the right is greater

$a = 100;
$b = 1000;

echo $a <=> $a; // 0 since they are equal
echo $a <=> $b; // -1 since $a < $b
echo $b <=> $a; // 1 since $b > $a

// Variables can be converted between types, depending on their usage.

$integer = 1;
echo $integer + $integer; // => 2

$string = '1';
echo $string + $string; // => 2 (strings are coerced to integers)

$string = 'one';
echo $string + $string; // => 0
// Outputs 0 because the + operator cannot cast the string 'one' to a number

// Type casting can be used to treat a variable as another type

$boolean = (boolean)1; // => true

$zero = 0;
$boolean = (boolean)$zero; // => false

// There are also dedicated functions for casting most types
$integer = 5;
$string = strval($integer);

$var = null; // Null value
