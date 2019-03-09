<?php

$sum = 10;

function doSum(int $a = 0, int $b = 0) :int
{
    global $sum;
    $sum = $a+$b;
    echo "inside sum \$sum is: $sum \n";
    return $sum;
}
echo "Before sum \$sum is: $sum \n";
echo doSum(10,20)."\n";
echo "After sum \$sum is: $sum \n";