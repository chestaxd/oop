<?php

namespace App\Tests\Creational;

use App\Controller\Creational\FactoryMethod\Air;
use App\Controller\Creational\FactoryMethod\AirDeliveryFactory;
use App\Controller\Creational\FactoryMethod\Ship;
use App\Controller\Creational\FactoryMethod\ShipDeliveryFactory;
use App\Controller\Creational\FactoryMethod\Truck;
use App\Controller\Creational\FactoryMethod\TruckDeliveryFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTests extends TestCase
{
    public function testTruckDeliveryTest()
    {
        $deliveryFactory = new TruckDeliveryFactory();
        $delivery = $deliveryFactory->createDeliverer();

        $this->assertInstanceOf(Truck::class, $delivery);
    }

    public function testShipDeliveryTest()
    {
        $deliveryFactory = new ShipDeliveryFactory();
        $delivery = $deliveryFactory->createDeliverer();
        $this->assertInstanceOf(Ship::class, $delivery);
    }

    public function testAirDeliveryTest()
    {
        $deliveryFactory = new AirDeliveryFactory();
        $delivery = $deliveryFactory->createDeliverer();
        $this->assertInstanceOf(Air::class, $delivery);
    }
}
