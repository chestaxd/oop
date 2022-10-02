<?php

namespace App\Controller\Creational\FactoryMethod;

class Ship implements Transport
{
    public function deliver()
    {
        echo 'Ship delivery';
    }
}