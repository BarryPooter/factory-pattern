<?php

namespace App\Classes;

use App\Contracts\Vehicle;

class Motorcycle extends ConcreteVehicle
{
    public function __construct()
    {
        $this->setWheels(2);
        $this->setSpeed(120);
        $this->setColour('black');
        $this->setName('motorcycle');
    }
}