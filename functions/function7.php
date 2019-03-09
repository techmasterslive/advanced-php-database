<?php
declare(strict_types=1);

function makeSum(int $a = 0, int $b = 0, int $c = 0)
{
    echo $a+$b+$c."\n";
}

$a = 20;
$b = 10;
$c = 5;

makeSum($a, $c);
makeSum(40.2, 10.8, 20.5);
makeSum("mizan", 10, 20);