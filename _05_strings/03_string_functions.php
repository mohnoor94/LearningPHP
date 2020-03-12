<?php
include "../utils/helpers.php";

newSection('Changing Case', true);

/*
Changes all the characters to be uppercase or all lowercase
These functions each take one parameter.
1. String that will have it's case changed.
*/

$quote = "To be or not to be, that is the question.";

$quote = strtoupper($quote);

//$quote = strtolower($quote);

echo $quote;

// =====================================================================================================================
newSection('String Length: strlen()');

/*
This function returns the length of a string.

This function takes one parameter:
1. String you wish to find of the length of.
*/

$quote = "There is no great genius without a mixture of madness.";

$length = strlen($quote);

echo $length;

// =====================================================================================================================
newSection('String Position: strpos()');

/*
This dtermines if there is a character or string of characters that exists inside of a string.

This function takes two parameters, with an option for a third:
1. The string that will be searched.
2. The character(s) that you are searching for.
3. Optional: Offset, set to "1" (any value), indicated you are skipping the first found characer and want to know the next location of the same character after a certain offset.
*/

$quote = "Courage is resistance to fear, mastery of fear, not absence of fear.";

echo strpos($quote, "fear"), "\n";
echo strpos($quote, "fear", 26), "\n";
echo strpos($quote, "ZZZ", 26); // will return nothing

// =====================================================================================================================
newSection('String Replace: str_replace()');

/*
This function will replace certain occurances in a string with the new value that is wanted.

This function takes three parameters, with an optional fourth:
1. The value you are looking for in the string
2. The value you would like to replace with the value you are looking for
3. The string value you would like to search in.
*/

$quote = "To be or not to be? That is the question.";

$replaced = str_replace("be", "know", $quote, $replacementCount);

echo $replaced, "\n";
echo $replacementCount;

// =====================================================================================================================
newSection('SubString: substr()');

/*
This function will take a string and create a sub string from the specific locations you provide.

This function takes two parameters, with an option for a third.
1. String to be manipulated
2. Starting location of substring. (0 is the beginning)
3. Optional: How many characters you want to take.
*/

$quote = "Only those who will risk going too far can possibly find out how far one can go.";

echo substr($quote, 4), "\n"; # starts at character location 4 and takes the rest of the string.
echo substr($quote, -4), "\n"; # takes the 4 characters from the end.
echo substr($quote, 0, -5), "\n"; # starts at the beginning and goes till 5 from the end
echo substr($quote, 3, 2), "\n"; # starts 3 character in and grabs 2 characters from that spot

// =====================================================================================================================
newSection('String Split: str_split()');

/*
This function will split up a string by character and store it to an array. It also has the option to split up a string
by character count.

This function takes one parameter, with an optional second parameter:
1. The string you wish to split
2. Optional: The string chunks you wish to create on the split
*/


$quote = "It is a melancholy truth that even great men have their poor relations.";
$quote = str_split($quote, 8);

print_r($quote);