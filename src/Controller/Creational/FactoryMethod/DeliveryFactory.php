<?php

namespace App\Controller\Creational\FactoryMethod;

interface DeliveryFactory
{
    public function createDeliverer(): Transport;

}