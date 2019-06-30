<?php

abstract class DummyAbstract
{
    abstract protected function showName($name, $age);

    function showAnotherName() {

    }

    function showAnotherNameAndAddress()
    {

    }
}

abstract class Two extends DummyAbstract {
    function showAddress()
    {

    }

    abstract function showNewAddress();
}

class Sample extends Two {
   protected function showName($name, $age)
   {

   } 

   function showNewAddress()
   {

   }
}
