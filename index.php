<?php
include_once 'vendor/autoload.php';

function printVehicleDetails (\App\Contracts\Vehicle $vehicle)
{
    $colour = $vehicle->getColour();
    $wheels = $vehicle->getWheels();
    $speed  = $vehicle->getSpeed();

    var_dump("A {$colour} ". get_class($vehicle) ." has been created, it has {$wheels} wheels and is currently driving at {$speed}/hr.");
}


// Construct a Motorcycle using its Factory.
$motorcycle = (new \App\Factories\MotorcycleFactory())->build();
printVehicleDetails($motorcycle);
