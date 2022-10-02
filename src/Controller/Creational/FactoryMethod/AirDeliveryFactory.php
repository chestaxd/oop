<?php

namespace App\Controller\Creational\FactoryMethod;

class AirDeliveryFactory implements DeliveryFactory
{

    public function createDeliverer(): Transport
    {
        return new Air();
    }
}