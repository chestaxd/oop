<?php

namespace App\Controller\Behavioral\Mediator;

class Component2 extends BaseComponent
{
    public function doC(): void
    {
        echo "Component 2 does C.";
        $this->mediator->notify($this, "C");
    }

    public function doD(): void
    {
        echo "Component 2 does D.";
        $this->mediator->notify($this, "D");
    }
}