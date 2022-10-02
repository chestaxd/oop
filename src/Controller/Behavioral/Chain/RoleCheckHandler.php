<?php

namespace App\Controller\Behavioral\Chain;

/**
 * Это Конкретное Middleware проверяет, имеет ли пользователь, связанный с
 * запросом, достаточные права доступа.
 */
class RoleCheckHandler extends Middleware
{
    public function check(string $email, string $password): bool
    {
        if ($email !== "admin@example.com") {
            return throw new \Exception('Permission denied!');

        }
        return parent::check($email, $password);
    }
}