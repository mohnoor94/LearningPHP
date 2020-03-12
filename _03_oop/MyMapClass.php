<?php


// You can use "magic methods" to create getters and setters
class MyMapClass
{
    private $property;

    public function __construct($property)
    {
        $this->property = $property;
    }

    public function __get($key)
    {
        return $this->$key;
    }

    public function __set($key, $value)
    {
        $this->$key = $value;
    }
}
