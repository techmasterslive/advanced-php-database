<?php

spl_autoload_register(function ($className){
    echo "I am looking for Class : $className \n";
    if(file_exists("lib/".$className.".php"))
        include "lib/".$className.".php"; 
    else 
        throw new Exception('Could not find the class in lib folder'.$className);
});


function myAutoLoaderFunction($className){
    echo "I am looking for Class : $className \n";
    if(file_exists("inc/".$className.".php"))
        include "inc/".$className.".php"; 
    else 
        throw new Exception('Could not find the class in inc folder '.$className);
}

function myAutoLoaderFunctionAlt($className){
    echo "I am looking for Class : $className \n";
    if(file_exists("inc/lib/".$className.".php"))
        include "inc/lib/".$className.".php"; 
    else 
        throw new Exception('Could not find the class in inc/lib folder '.$className);
}

spl_autoload_register('myAutoLoaderFunction');
spl_autoload_register('myAutoLoaderFunctionAlt');








try {
$obj = new One();
$obj->show()."\n";

$obj2 = new Two();
$obj3 = new Ten();
} catch(Exception $e) {
    echo $e->getMessage();
}