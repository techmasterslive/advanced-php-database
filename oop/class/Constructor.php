<?php

class Constructor
{
    var $name;
    var $age;

    function __construct($name, $age)
    {
        echo "I am constructing the object with $name & $age \n";
        $this->name = $name;
        $this->age = $age;
    }

    function showAge()
    {
        echo "I am from method age\n";
        echo $this->age."\n";
    }

    function showName()
    {
        echo "I am from show name method\n";
        echo $this->name."\n";
    }

    function showEverything()
    {
        $this->showName();
        $this->showAge();
    }


    function __destruct()
    {
        echo "I am destructing the object\n";
    }

}

$obj = new Constructor("First Object", "1 year");
$obj->showEverything();
$obj = null;
echo "Done with object creation and destruction\n";