<?php
include '../utils/helpers.php';

newSection('Functions', true);

// A valid function name starts with a letter or underscore, followed by any
// number of letters, numbers, or underscores.

// =====================================================================================================================
newSection('Simple Functions');

// Define a function with "function":
function sayHello()
{
    return 'Hello';
}

echo sayHello(); // => "Hello"

// =====================================================================================================================
newSection('Parameters');

function add($x, $y = 1)
{ // $y is optional and defaults to 1
    return $x + $y;
}

echo add(4), "\n"; // => 5
echo add(4, 2); // => 6

// =====================================================================================================================
newSection('Anonymous Functions');

// Since PHP 5.3 you can declare anonymous functions;
$inc = function ($x) {
    return $x + 1;
};

echo $inc(2); // => 3

// =====================================================================================================================
newSection('Higher Level Functions');

function foo($x, $y, $z)
{
    echo "$x - $y - $z";
}

// Functions can return functions
function bar($x, $y)
{
    // Use 'use' to bring in outside variables
    return function ($z) use ($x, $y) {
        foo($x, $y, $z);
    };
}

$bar = bar('A', 'B');
$bar('C'); // Prints "A - B - C"


// =====================================================================================================================
newSection('Call Named Functions!');

// You can call named functions using strings
$function_name = 'add';
echo $function_name(1, 2); // => 3
// Useful for programatically determining which function to run.
// Or, use call_user_func(callable $callback [, $parameter [, ... ]]);


// =====================================================================================================================
newSection('Get Function Parameters');

// You can get all the parameters passed to a function
function parameters()
{
    $numargs = func_num_args();
    if ($numargs > 0) {
        echo func_get_arg(0) . ' | ';
    }

    echo "\n=====\n";

    $args_array = func_get_args();
    foreach ($args_array as $key => $arg) {
        echo $key . ' - ' . $arg . ' | ' . "\n";
    }
}

parameters('Hello', 'World'); // Hello | 0 - Hello | 1 - World |


// =====================================================================================================================
newSection('Var Args');

// Since PHP 5.6 you can get a variable number of arguments
function variable($word, ...$list)
{
    echo $word . "\n";
    foreach ($list as $item) {
        echo $item . ' | ';
    }
}

variable("Separate", "Hello", "World"); // Separate \n Hello | World |