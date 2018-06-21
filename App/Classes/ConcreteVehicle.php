<?php
namespace App\Classes;

use App\Contracts\Vehicle;

class ConcreteVehicle implements Vehicle
{
    protected $wheels;

    public function setWheels(int $wheels): void
    {
        $this->wheels = (int) $wheels;
    }

    public function setSpeed(int $speed): void
    {
    }

    public function setColour(string $colour): void
    {
    }

    public function getWheels(): int
    {
        return $this->wheels;
    }

    public function getSpeed(): int
    {
        return 100;
    }

    public function getColour(): string
    {
    }
}