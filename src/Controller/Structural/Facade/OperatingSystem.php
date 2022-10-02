<?php

namespace App\Controller\Structural\Facade;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}