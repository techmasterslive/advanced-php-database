<?php

function doSum(...$args)
{
    echo "a is $a\n";
    print_r($args);

}

doSum(1);
doSum(1,2,3,4);
doSum(1,1,1,1,1,11,1,1,11,1,1,1,1,1,1);


function doAnotherSum(int $a = 0, int $b = 0):int
{
    return $a+$b;
}

echo doAnotherSum(5,10)."\n";
$val = [10,30];
echo doAnotherSum(...$val)."\n";