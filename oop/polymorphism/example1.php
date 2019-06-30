<?php

abstract class Animal
{
    abstract public function speak();
    abstract public function walk();
}

class Human extends Animal
{
    function speak()
    {
        echo "Hi\n";
    }

    function walk()
    {
        echo "yes we can walk in two feet";
    }
}

class Cat extends Animal
{
    function speak()
    {
        echo "Meow\n";
    }

    function walk()
    {
        echo "yes we can walk in four feet";
    }
}

class Bird extends Animal
{
    function speak()
    {
        echo "Chrip\n";
    }

    function walk()
    {
        echo "yes we can walk in two feet";
    }
}

$bird = new Bird();
$bird->speak();
$human = new Human();
$human->speak();
$cat = new Cat();
$cat->speak();