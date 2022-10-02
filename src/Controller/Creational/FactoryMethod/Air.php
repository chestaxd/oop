<?php

namespace App\Controller\Creational\FactoryMethod;

class Air implements Transport
{

    public function deliver()
    {
        echo 'Air delivery';
    }
}