<?php

namespace App\Controller\Creational\StaticFactory;

interface Formatter
{
    public function format(string $input): string;
}