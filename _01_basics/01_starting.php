<?php
include "../utils/helpers.php";

// source: https://learnxinyminutes.com/docs/php/

// NOTE: Run `php -S localhost:8080` in this directory to run this code in your browser!

// PHP code must be enclosed with <?php tags

// If your php file only contains PHP code, it is best practice
// to omit the php closing tag to prevent accidental output.

echo "Hello World\n\n";

// =====================================================================================================================
newSection("Types & Variables");

// Variables begin with the $ symbol.
// A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores

$boolValue = true || True || TRUE || false || False || FALSE;
$intVar = 10;
$floatVar = 2.5;
$stringVar = "bla bla bla!";

echo "- The boolean: $boolValue,\n- The integer: $intVar,\n- The float: $floatVar,\n- The String:$stringVar\n\n";
echo '- Normal Strings should be enclosed in single quotes, no escapes and no interpolations here!';
echo "\n- Avoid using double quotes except to embed other variables\n";

$multilineStringVar = <<<'END'
What
a stupid
syntax!
END;

echo "\n- Multi Line String:\n$multilineStringVar\n";
echo '- This string ' . 'is concatenated (using a dot!)\n';
echo '- Multiple ', 'Parameters ', 'are Valid', "\n";

// =====================================================================================================================
newSection("Constants");

// A constant is defined by using define() and can never be changed during runtime!
// A valid constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.

define ("PI", 22/7);
echo '- PI = ', PI, "\n";