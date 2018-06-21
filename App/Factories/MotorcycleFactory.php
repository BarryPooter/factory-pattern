<?php

namespace App\Factories;

use App\Classes\Motorcycle;
use App\Contracts\Vehicle;

class MotorcycleFactory extends VehicleFactory
{
    public function build(): Vehicle
    {
        return new Motorcycle();
    }
}