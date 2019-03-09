<?php

$numbers = [1,2,3,4,5,6,7,8,9];

echo "Before sorting \n";
print_r($numbers);

usort($numbers, 'myComparison');
echo "After sorting \n";
print_r($numbers);

function myComparison($a, $b)
{
    return $b > $a;
}

$numbers = [1,2,3,4,5,6,7,8,9];

usort($numbers, function($a, $b){
    return $b > $a;
});
echo "Again sorting \n";
print_r($numbers);

