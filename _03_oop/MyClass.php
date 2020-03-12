<?php

// Class name is case insensitive!
class MyClass
{
    const MY_CONST = 'value'; // A constant
    static $staticVar = 'static';

    // Static variables and their visibility
    public static $publicStaticVar = 'publicStatic';

    // Accessible within the class only
    private static $privateStaticVar = 'privateStatic';

    // Accessible from the class and subclasses
    protected static $protectedStaticVar = 'protectedStatic';

    // Properties must declare their visibility
    public $property = 'public';
    public $instanceProp;
    protected $prot = 'protected'; // Accessible from the class and subclasses
    private $priv = 'private';   // Accessible within the class only

    // Create a constructor with __construct
    public function __construct($instanceProp)
    {
        // Access instance variables with $this
        $this->instanceProp = $instanceProp;
    }

    // Methods are declared as functions inside a class
    public function myMethod()
    {
        print "MyClass";
    }

    // final keyword would make a function unoverridable
    final function youCannotOverrideMe()
    {
    }

    // Magic Methods

    // what to do if Object is treated as a String
    public function __toString()
    {
        return $this->property;
    }

    // opposite to __construct()
    // called when object is no longer referenced
    public function __destruct()
    {
        print "Destroying\n";
    }

    /*
 * Declaring class properties or methods as static makes them accessible without
 * needing an instantiation of the class. A property declared as static can not
 * be accessed with an instantiated class object (though a static method can).
 */

    public static function myStaticMethod()
    {
        print 'I am static';
    }
}