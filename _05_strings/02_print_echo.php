<?php
include "../utils/helpers.php";

newSection('print VS echo', true);

/*
Below are different scenarios in which you can use the print statement. 
Beside each example, it is indicated whether you can use echo in that scenario.
*/

print "This above all: to thine own self be true\n"; // Works with echo
print("The lady doth protest too much, methinks\n");  // Works with echo

echo  "Et", "tu", ",", "Brute", "!", "\n"; // Won't work with print, throws error
echo  "Et", " tu", ", ", "Brute", "!", "\n";

// Multi lines - works with echo
print "
Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Morbi tincidunt commodo est. In sit amet eleifend dui. 
Nam euismod porta ultrices. 
";
