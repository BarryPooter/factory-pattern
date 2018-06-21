<?php

namespace App\Classes;

class Car extends ConcreteVehicle
{
    public function __construct()
    {
        $this->setWheels(4);
        $this->setSpeed(100);
        $this->setColour('red');
    }
}