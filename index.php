<?php
include_once 'vendor/autoload.php';

function printVehicleDetails (\App\Contracts\Vehicle $vehicle)
{
    $name = $vehicle->getName();
    $colour = $vehicle->getColour();
    $wheels = $vehicle->getWheels();
    $speed  = $vehicle->getSpeed();

    echo "A {$colour} {$name} has been created, it has {$wheels} wheels and is currently driving at {$speed} km\\h.<br/>\n";
}


// Construct a Motorcycle using its Factory.
$motorcycle = (new \App\Factories\MotorcycleFactory())->build();
printVehicleDetails($motorcycle);

for ($i = 0; $i < 3; $i++) {
    printVehicleDetails((new \App\Factories\CarFactory())->build());
}
