<?php

showMyName('Mizan');
showMyName('Rahman');

function showMyName($name)
{
    echo "My Name is {$name}\n";
}

// variable function 

function showMyAge()
{
    echo "I do not know your age";
}

$myVariableFunction = 'showMyAge';
$myVariableFunction();
