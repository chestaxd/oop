<?php

namespace App\Controller\Behavioral\Chain;

/**
 * Это Конкретное Middleware проверяет, не было ли превышено максимальное число
 * неудачных запросов авторизации.
 */
class ThrottlingHandler extends Middleware
{
    private $requestPerMinute;

    private $request;

    private $currentTime;

    public function __construct(int $requestPerMinute)
    {
        $this->requestPerMinute = $requestPerMinute;
        $this->currentTime = time();
    }

    public function check(string $email, string $password): bool
    {
        if (time() > $this->currentTime + 60) {
            $this->request = 0;
            $this->currentTime = time();
        }

        $this->request++;

        if ($this->request > $this->requestPerMinute) {
            return throw new \Exception('ThrottlingMiddleware: Request limit exceeded!');
        }

        return parent::check($email, $password);
    }
}