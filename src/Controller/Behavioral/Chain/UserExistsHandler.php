<?php

namespace App\Controller\Behavioral\Chain;

/**
 * Это Конкретное Middleware проверяет, существует ли пользователь с указанными
 * учётными данными.
 */
class UserExistsHandler extends Middleware
{
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public function check(string $email, string $password): bool
    {
        if (!$this->server->hasEmail($email)) {
            return throw new \Exception('UserExistsMiddleware: This email is not registered!');
        }

        if (!$this->server->isValidPassword($email, $password)) {
            return throw new \Exception('UserExistsMiddleware: Wrong password!');
        }
        return parent::check($email, $password);
    }
}
