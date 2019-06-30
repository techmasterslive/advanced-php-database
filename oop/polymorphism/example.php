<?php

class Animal
{
    function speak()
    {
        echo "i can speak";
    }

    function walk()
    {
        echo "i can walk";
    }
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
    function talk()
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