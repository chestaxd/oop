<?php

namespace App\Controller\Creational\StaticFactory;

use InvalidArgumentException;

final class StaticFactory
{
    public static function factory(string $type): Formatter
    {
        if ($type == 'number') {
            return new FormatNumber();
        } elseif ($type == 'string') {
            return new FormatString();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}