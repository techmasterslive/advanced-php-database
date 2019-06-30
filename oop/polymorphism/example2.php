<?php

interface Animal
{
    public function speak();
    public function walk();
}

class Human implements Animal
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

class Cat implements Animal
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

class Bird implements Animal
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