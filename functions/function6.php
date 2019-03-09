<?php

function myArraySum(array $array)
{
    $sum = 0;
    foreach($array as $val) {
        $sum += $val;
    }

    echo $sum;
}

function newLine()
{
    echo "\r\n";
}

myArraySum([1,2,3,4]);
newLine();
myArraySum(1,2,3,4);
newLine();