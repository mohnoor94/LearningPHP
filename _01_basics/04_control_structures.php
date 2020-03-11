<?php
include "../utils/helpers.php";
newSection('Control Structures', true);

newSection("if");
if (true) {
    echo "true is true!";
} elseif (false) {
    echo "No way to get here!";
} else {
    echo "true is false :3";
}

// =====================================================================================================================
newSection('switch');

$x = 0;
switch ($x) {
    case '0':
        print 'Switch does type coercion';
        break; // You must include a break, or you will fall through
    // to cases 'two' and 'three'
    case 'two':
    case 'three':
        // Do something if $variable is either 'two' or 'three'
        break;
    default:
        // Do something by default
}

// =====================================================================================================================
newSection('while');

$i = 0;
while ($i < 5) {
    echo $i++;
}

// =====================================================================================================================
newSection('do ... while');

$i = 0;
do {
    echo $i++;
} while ($i < 5);

// =====================================================================================================================
newSection('for');

for ($x = 0; $x < 10; $x++) {
    echo $x;
}

// =====================================================================================================================
newSection('foreach');

$wheels = ['bicycle' => 2, 'car' => 4];

// Foreach loops can iterate over arrays
foreach ($wheels as $wheel_count) {
    echo $wheel_count, ", ";
}

echo "\n";

// You can iterate over the keys as well as the values
foreach ($wheels as $vehicle => $wheel_count) {
    echo "A $vehicle has $wheel_count wheels\n";
}

// =====================================================================================================================
newSection('break and continue');

$i = 0;
while ($i < 5) {
    if ($i === 3) {
        break; // Exit out of the while loop
    }
    echo $i++, "\n";
}

echo "\n=====\n";

for ($i = 0; $i < 5; $i++) {
    if ($i === 3) {
        continue; // Skip this iteration of the loop
    }
    echo $i, "\n";
}