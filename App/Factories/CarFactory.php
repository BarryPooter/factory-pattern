<?php

namespace App\Factories;

use App\Classes\Car;
use App\Contracts\Vehicle;

class CarFactory extends VehicleFactory
{
    public function build() : Vehicle
    {
        $randomize = rand(0,2);
        $availableColours = (array) [
            'red', 'white', 'blue'
        ];

        $car = new Car();
        $car->setColour($availableColours[$randomize]);
        $car->setName('car');
        return $car;
    }
}