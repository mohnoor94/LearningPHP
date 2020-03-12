<?php
include "../utils/helpers.php";
newSection('Late Static Binding', true);

class ParentClass
{
    public static function who()
    {
        echo "I'm a " . __CLASS__ . "\n";
    }

    public static function test()
    {
        // self references the class the method is defined within
        self::who();
        // static references the class the method was invoked on
        static::who();
    }
}

ParentClass::test();
lines(2);

/*
I'm a ParentClass
I'm a ParentClass
*/

class ChildClass extends ParentClass
{
    public static function who()
    {
        echo "But I'm " . __CLASS__ . "\n";
    }
}

ChildClass::test();
/*
I'm a ParentClass
But I'm ChildClass
*/
