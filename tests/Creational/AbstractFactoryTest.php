<?php

namespace App\Tests\Creational;

use App\Controller\Creational\AbstractFactory\Chair;
use App\Controller\Creational\AbstractFactory\FurnitureFactory;
use App\Controller\Creational\AbstractFactory\ModernFurnitureFactory;
use App\Controller\Creational\AbstractFactory\Table;
use App\Controller\Creational\AbstractFactory\VictorianFurnitureFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new ModernFurnitureFactory()],
            [new VictorianFurnitureFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testFactory(FurnitureFactory $furnitureFactory): void
    {
        $this->assertInstanceOf(Chair::class, $furnitureFactory->createChair());
        $this->assertInstanceOf(Table::class, $furnitureFactory->createTable());
    }
}
