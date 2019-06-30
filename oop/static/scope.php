<?php

class GrandFather {
    public $name = 'Parent';

    function show()
    {
        echo "From Grand Parents \n";
        Father::show();
    }
}

class Father extends GrandFather{
    public $name = 'Parent';

    function show()
    {
        echo "From Parent \n";
    }
}


class Son extends Father {
    public $name = 'Child';

    function show()
    {
        GrandFather::show();
        echo "From Child \n";
    }
}

$mizan = new Son();
$mizan->show();
