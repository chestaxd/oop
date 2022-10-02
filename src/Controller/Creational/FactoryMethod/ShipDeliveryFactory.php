<?php

namespace App\Controller\Creational\FactoryMethod;

class ShipDeliveryFactory implements DeliveryFactory
{

    public function createDeliverer(): Transport
    {
        return new Ship();
    }
}