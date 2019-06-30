<?php

spl_autoload_register(function ($className){
    echo "LIB:: I am looking for Class : $className \n";
    if(file_exists("lib/".$className.".php"))
        include "lib/".$className.".php"; 
});


function myAutoLoaderFunction($className){
    echo "INC:: I am looking for Class : $className \n";
    if(file_exists("inc/".$className.".php"))
        include "inc/".$className.".php"; 
}

function myAutoLoaderFunctionAlt($className){
    echo "INC/LIB:: I am looking for Class : $className \n";
    if(file_exists("inc/lib/".$className.".php"))
        include "inc/lib/".$className.".php"; 
}

spl_autoload_register('myAutoLoaderFunction');
spl_autoload_register('myAutoLoaderFunctionAlt', false, true);



try {
$obj = new One();
$obj->show()."\n";

$obj2 = new Two();
$obj3 = new Ten();
} catch(Exception $e) {
    echo $e->getMessage();
}