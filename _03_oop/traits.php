<?php

// Traits vs. Interfaces in PHP. The main difference between the Traits and Interfaces in PHP is that the Traits define
// the actual implementation of each method within each class, so many classes implement the same interface but having
// different behavior, while traits are just chunks of code injected in a class in PHP.
// --> https://www.geeksforgeeks.org/traits-vs-interfaces-in-php/

// Traits are available from PHP 5.4.0 and are declared using "trait"

trait MyTrait
{
    public function myTraitMethod()
    {
        print "I have MyTrait\n";
    }
}

class MyTraitfulClass
{
    use MyTrait;
}
