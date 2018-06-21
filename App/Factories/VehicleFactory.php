<?php

namespace App\Factories;

use App\Classes\Car;
use App\Classes\Motorcycle;
use App\Contracts\Vehicle;

abstract class VehicleFactory
{
    abstract public function build() : Vehicle;
}