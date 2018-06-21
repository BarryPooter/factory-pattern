<?php

namespace Tests;

use App\Classes\ConcreteVehicle;
use App\Contracts\Vehicle;
use PHPUnit\Framework\TestCase;

class ConcreteVehicleTest extends TestCase
{
    protected $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new ConcreteVehicle();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(Vehicle::class, $this->sut);
    }

    public function testSetWheelsTest () : void
    {
        $this->sut->setWheels(2);
        $this->assertEquals(2, $this->sut->getWheels());

        $this->sut->setWheels(4);
        $this->assertEquals(4, $this->sut->getWheels());
    }
}
