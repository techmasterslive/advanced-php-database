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
}

class Mamal extends Animal
{

    public function showChildLegs()
    {
        echo $this->legs;
    }
}

$dog = new Mamal;
echo $dog->showChildLegs();
//echo $dog->getLegs()."\n";
//var_dump($dog);
