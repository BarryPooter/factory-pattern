<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ConcreteVehicleTest extends TestCase
{
    protected $sut;

    protected function setUp() /* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->sut = new \App\Classes\ConcreteVehicle();
    }

    public function testInstanceOf () : void
    {
        $this->assertInstanceOf(\App\Contracts\Vehicle::class, $this->sut);
    }
}
