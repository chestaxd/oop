<?php

namespace App\Tests\Behavioral;


use App\Controller\Behavioral\Mediator\Component1;
use App\Controller\Behavioral\Mediator\Component2;
use App\Controller\Behavioral\Mediator\ConcreteMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testMediator1()
    {
        $this->expectOutputString("Component 1 does A.Mediator reacts on A and triggers following operations:Component 2 does C.Component 2 does D.Mediator reacts on D and triggers following operations:Component 1 does B.Component 2 does C.");
        $component1 = new Component1();
        $component2 = new Component2();
        $mediator = new ConcreteMediator($component1, $component2);
        $component1->doA();
        $component2->doD();
    }
}