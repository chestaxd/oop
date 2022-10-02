<?php

namespace App\Controller\Creational\FactoryMethod;

class Truck implements Transport
{
    public function deliver()
    {
        echo 'truck delivery';
    }
}