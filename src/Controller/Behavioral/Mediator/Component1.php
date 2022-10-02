<?php

namespace App\Controller\Behavioral\Mediator;

/**
 * Конкретные Компоненты реализуют различную функциональность. Они не зависят от
 * других компонентов. Они также не зависят от каких-либо конкретных классов
 * посредников.
 */
class Component1 extends BaseComponent
{
    public function doA(): void
    {
        echo "Component 1 does A.";
        $this->mediator->notify($this, "A");

    }

    public function doB(): void
    {
        echo "Component 1 does B.";
        $this->mediator->notify($this, "B");
    }
}