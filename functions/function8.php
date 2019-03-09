<?php

function makeSum(int $a = 0, int $b = 0, int $c = 0)
{
    return $a+$b+$c;
}

$a = 20;
$b = 10;
$c = 5;

echo makeSum($a, $c)."\n";
echo makeSum(40.2, 10.8, 20.5)."\n";

function doNothing()
{
    echo "I am doing nothing";
    return NULL;
}


var_dump(doNothing());