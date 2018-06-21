<?php

namespace Tests;

use App\Classes\Car;
use App\Contracts\Vehicle;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new Car();
    }

    public function testInstanceOf ()
    {
        $this->assertInstanceOf(Vehicle::class, $this->sut);
    }
}