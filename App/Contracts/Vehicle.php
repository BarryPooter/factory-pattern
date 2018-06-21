<?php


namespace App\Contracts;


interface Vehicle
{
    public function setWheels() : void;
    public function setSpeed() : void;
    public function setColour() : void;
}