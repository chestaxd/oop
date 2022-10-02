<?php

namespace App\Controller\Structural\Flyweight;

/**
 * This is the interface that all flyweights need to implement
 */
interface Text
{
    public function render(string $extrinsicState): string;
}