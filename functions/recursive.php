<?php

// n! = n * n-1! 
// 5! = 5 * 4 * 3 * 2 * 1;
// 5! = 5 * 4!;
// 4! = 4 * 3!;

function iterativeFactorial(int $n):int
{
   $result = 1;
   for($i = 1;$i<=$n;$i++) {
       $result = $result * $i;
   }

   return $result;
}

function factorial(int $n):int
{
   if($n == 1) return 1;

   return $n * factorial($n-1);
}

echo factorial(5)."\n";
echo factorial(10)."\n";
echo factorial(20)."\n";
