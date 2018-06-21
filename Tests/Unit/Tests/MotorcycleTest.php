<?php

namespace Tests;

use App\Classes\Motorcycle;
use App\Contracts\Vehicle;
use PHPUnit\Framework\TestCase;

class MotorcycleTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new Motorcycle();
    }

    public function testInstanceOf ()
    {
        $this->assertInstanceOf(Vehicle::class, $this->sut);
    }
}