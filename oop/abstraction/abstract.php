<?php

abstract class AnimalAbstract
{
    abstract function speak();

    abstract function eat();
    
    abstract function walk();
}

class Human extends AnimalAbstract
{
    function speak()
    {
        echo "we can speak\n";
    }

    function eat()
    {
        echo "we can eat food\n";
    }

    function walk()
    {
        echo "we can walk\n";
    }
}