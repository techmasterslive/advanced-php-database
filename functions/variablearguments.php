<?php

function doSum()
{
    $args = func_get_args();
    $noArgs = func_num_args();
    print_r($args);

}

doSum(1);
doSum(1,2,3,4);
doSum(1,1,1,1,1,11,1,1,11,1,1,1,1,1,1);