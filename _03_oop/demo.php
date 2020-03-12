<?php

require_once 'MyClass.php';
require_once 'MyOtherClass.php';
require_once 'MyMapClass.php';
require_once 'interfaces.php';
require_once 'traits.php';
require_once '../utils/helpers.php';

// =====================================================================================================================
newSection("MyClass Uses", true);

// Class constants can always be accessed statically
echo MyClass::MY_CONST;    // Outputs 'value';

lines();
echo MyClass::$staticVar;  // Outputs 'static';

lines();

MyClass::myStaticMethod(); // Outputs 'I am static';

lines();

// Instantiate classes using new
$my_class = new MyClass('An instance property');
// The parentheses are optional if not passing in an argument.

lines(2);
// Access class members using ->
echo $my_class->property, "\n";     // => "public"
echo $my_class->instanceProp, "\n"; // => "An instance property"
$my_class->myMethod();        // => "MyClass"
lines(2);

// =====================================================================================================================
newSection("MyOtherClass Uses");

$my_other_class = new MyOtherClass('Instance prop');
$my_other_class->printProtectedProperty(); // => Prints "protected"
lines();
$my_other_class->myMethod();               // Prints "MyClass > MyOtherClass"

// =====================================================================================================================
newSection("MyMapClass Uses");

$x = new MyMapClass('nothing!');
echo $x->property, "\n"; // Will use the __get() method
$x->property = 'Something'; // Will use the __set() method
echo $x->property, "\n"; // Will use the __get() method

// =====================================================================================================================
newSection('Interfaces Uses');

$y = new MyConcreteClass();
$y->doSomething();
$y->doSomethingElse();
lines(2);

// =====================================================================================================================
newSection('Traits Uses');

$cls = new MyTraitfulClass();
$cls->myTraitMethod(); // Prints "I have MyTrait"
