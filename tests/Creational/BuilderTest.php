<?php

namespace App\Tests\Creational;

use App\Controller\Creational\Builder\CarBuilder;
use App\Controller\Creational\Builder\Director;
use App\Controller\Creational\Builder\Parts\Car;
use App\Controller\Creational\Builder\Parts\Truck;
use App\Controller\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $director = new Director();
        $newVehicle = $director->build($truckBuilder);
        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $director = new Director();
        $newVehicle = $director->build($carBuilder);
        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
