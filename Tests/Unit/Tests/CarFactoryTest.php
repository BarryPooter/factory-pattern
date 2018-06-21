<?php

namespace Tests;

use App\Contracts\Vehicle;
use App\Factories\CarFactory;
use App\Factories\VehicleFactory;
use PHPUnit\Framework\TestCase;

class CarFactoryTest extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new CarFactory();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(VehicleFactory::class, $this->sut);
    }

    public function testBuildInstanceOf () : void
    {
        $this->assertInstanceOf(Vehicle::class, $this->sut->build());
    }
}
