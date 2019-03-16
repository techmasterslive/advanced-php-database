<?php

class Animal
{
    protected $legs;
    private $hands;
    private $ears;
    private $eyes;

    protected const CLASSNAME = "ANIMAL";

    public function __construct($legs = 0, $hands = 0,$ears = 0, $eyes = 0)
    {
        $this->legs = $legs;
        $this->hands = $hands;
        $this->ears = $ears;
        $this->eyes = $eyes;
    }

    public function getLegs()
    {
        return $this->legs;
    }

    public function setLegs($legs)
    {
        $this->legs = $legs;
    }

    public function getHands()
    {
        return $this->hands;
    }

    public function setHands($hands)
    {
        $this->hands = $hands;
    }

    protected function showMyClassName()
    {
        return __CLASS__;
    }

    public function showClass()
    {
        echo "Animal\n";
    }
}

class Mamal extends Animal
{
    private $size;
    public function __construct($legs = 0, $hands = 0,$ears = 0, $eyes = 0, $size = 0)
    {
        parent::__construct($legs, $hands, $ears,$eyes);
        $this->size = $size;
    }

    public function showSize()
    {
        echo parent::showMyClassName()."\n";
        echo "size is $this->size with $this->legs legs \n";
    }

    public function showClass()
    {
        echo "Mamal\n";
    }
}

class Human extends Mamal
{
    public function showClass()
    {
        echo "Human\n";
    }

}

$dog = new Mamal(4,0,2,2,'big');
echo $dog->showClass();
$animal = new Animal();
echo $animal->showClass();
$mizan = new Human();
echo $mizan->showClass();
