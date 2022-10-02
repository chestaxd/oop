<?php

namespace App\Controller\Creational\AbstractFactory;

class VictorianFurnitureFactory implements FurnitureFactory
{

    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createTable(): Table
    {
        return new VictorianTable();
    }
}