<?php

function makeSum(int $a = 0, int $b = 0, int $c = 0) :?int
{
    //return $a+$b+$c;
    //return "mizan";
    return NULL;
}

$a = 20;
$b = 10;
$c = 5;

echo makeSum($a, $c)."\n";
echo makeSum(40.2, 10.8, 20.5)."\n";

function makeVoidSum(int $a = 0, int $b = 0, int $c = 0) :void
{
    //return $a+$b+$c;
    //return "mizan";
    return;
}

$a = 20;
$b = 10;
$c = 5;

echo makeVoidSum($a, $c)."\n";
echo makeVoidSum(40.2, 10.8, 20.5)."\n";


