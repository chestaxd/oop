<?php

namespace App\Controller\Behavioral\Memento;

class Memento
{
    public function __construct(private State $state)
    {
    }

    public function getState(): State
    {
        return $this->state;
    }
}