<?php

class Food
{
    public static $name = "Food";
    const FOODNAME = "FOOD NAME";

    static function showName()
    {
        echo "I am inside ".self::$name."\n";
        echo Food::FOODNAME."\n";
    }
}

//$chicken = new Food();
//$chicken->showName();

Food::showName();
echo Food::FOODNAME;