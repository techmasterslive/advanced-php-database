<?php

class First {

    var $name;
    var $age;

    function showAge()
    {
        echo "I am from method age";
    }

}

$sampleObj1 = new First;
var_dump($sampleObj1);
$sampleObj = new First();
var_dump($sampleObj);