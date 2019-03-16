<?php

class Animal
{
    private $legs;
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


$chicken = new Animal();
$chicken->setLegs(2);
echo $chicken->getLegs();
var_dump($chicken);