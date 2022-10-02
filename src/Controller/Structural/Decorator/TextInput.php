<?php

namespace App\Controller\Structural\Decorator;

/**
 * Конкретный Компонент является основным элементом декорирования. Он содержит
 * исходный текст как есть, без какой-либо фильтрации или форматирования.
 */
class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}