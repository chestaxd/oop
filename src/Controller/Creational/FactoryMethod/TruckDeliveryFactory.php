<?php

namespace App\Controller\Creational\FactoryMethod;

class TruckDeliveryFactory implements DeliveryFactory
{
    public function createDeliverer(): Transport
    {
        return new Truck();
    }
}