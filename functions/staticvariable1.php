<?php


function mySum()
{
    static $counter = 0;
    $counter++;
    echo $counter."\n";
}

function myAnotherSum()
{
    static $counter = 0;
    $counter++;
    echo $counter."\n";
}

mySum();
mySum();
myAnotherSum();
myAnotherSum();
mySum();
mySum();
myAnotherSum();
mySum();