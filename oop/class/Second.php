<?php

class Second {

    var $name = "Mizan";
    var $age = "39";

    function showAge()
    {
        echo "I am from method age\n";
        echo $this->age."\n";
    }

    function showName()
    {
        echo "I am from show name method\n";
        echo $this->name."\n";
    }

    function showEverything()
    {
        $this->showName();
        $this->showAge();
    }

}

$third = new Second;
$third->name = "Third Object";
$third->age = " 10 minutes ";
$third->showEverything();

$mizan = new Second;
echo $mizan->name." is ".$mizan->age." years old\n";
$mizan->showAge();
$mizan->name = "Mizanur Rahman";
echo $mizan->name." is ".$mizan->age." years old\n";
echo $mizan->showName()."\n";

$techmasters = new Second;
$techmasters->name = "Techmasters live";
$techmasters->age = "2 months";
echo $techmasters->name." is ".$techmasters->age." old\n";
echo $techmasters->showName()."\n";

