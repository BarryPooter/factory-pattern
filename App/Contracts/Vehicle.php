<?php


namespace App\Contracts;

interface Vehicle
{
    public function setWheels(int $wheels) : void;
    public function setSpeed(int $speed) : void;
    public function setColour(string $colour) : void;
    public function setName(string $name) : void;

    public function getWheels() : int;
    public function getSpeed() : int;
    public function getColour() : string;
    public function getName() : string;
}