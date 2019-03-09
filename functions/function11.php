<?php


$a = 5;
$b = 2;

function changeVariable(int $a = 0, int $b = 0) :void
{
    $a *= 5; // $a = $a * 5;
    $b *= 10; // $b = $b * 10;
}
echo "Before changing \$a is: $a & \$b is: $b \n";
echo changeVariable($a,$b)."\n";
echo changeVariable(10,20)."\n";
echo "After changing \$a is: $a & \$b is: $b \n";


function changeVariableByReference(int &$a = 0, int &$b = 0) :void
{
    $a *= 5; // $a = $a * 5;
    $b *= 10; // $b = $b * 10;
}
echo "Before changing \$a is: $a & \$b is: $b \n";
echo changeVariableByReference($a,$b)."\n";

echo "After changing \$a is: $a & \$b is: $b \n";