<?php

namespace App\Controller\Creational\AbstractFactory;

class ModernFurnitureFactory implements FurnitureFactory
{

    public function createChair(): Chair
    {
        return new ModerChair();
    }

    public function createTable(): Table
    {
        return new ModernTable();
    }
}