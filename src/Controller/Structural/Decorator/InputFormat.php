<?php

namespace App\Controller\Structural\Decorator;

interface InputFormat
{
    public function formatText(string $text): string;
}