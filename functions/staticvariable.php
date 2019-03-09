<?php

$counter = 0;
$anotherCounter = 0;

function mySum()
{
    global $counter;
    $counter++;
    echo $counter."\n";
}

function myAnotherSum()
{
    global $anotherCounter;
    $anotherCounter++;
    echo $anotherCounter."\n";
}

mySum();
mySum();
myAnotherSum();
myAnotherSum();
mySum();
mySum();
myAnotherSum();
mySum();