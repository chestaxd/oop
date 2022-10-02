<?php

namespace App\Controller\Creational\AbstractFactory;

interface FurnitureFactory
{
    public function createChair(): Chair;

    public function createTable(): Table;

}