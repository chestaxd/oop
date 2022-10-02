<?php

namespace App\Tests\Behavioral;

use App\Controller\Behavioral\Chain\RoleCheckHandler;
use App\Controller\Behavioral\Chain\Server;
use App\Controller\Behavioral\Chain\ThrottlingHandler;
use App\Controller\Behavioral\Chain\UserExistsHandler;
use PHPUnit\Framework\TestCase;

class ChainTest extends TestCase
{
    private Server $server;

    public function setUp(): void
    {
        $this->server = new Server();
        $this->server->register("admin@example.com", "admin_pass");
        $this->server->register("user@example.com", "user_pass");
    }

    public function testLoginSuccess()
    {
        $middleware = new ThrottlingHandler(2);
        $middleware
            ->linkWith(new UserExistsHandler($this->server))
            ->linkWith(new RoleCheckHandler());

        $this->server->setMiddleware($middleware);


        $email = 'admin@example.com';
        $password = 'admin_pass';
        $success = $this->server->logIn($email, $password);
        $this->assertTrue($success);
    }

    public function testInvalidPassword()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('UserExistsMiddleware: Wrong password!');
        $middleware = new UserExistsHandler($this->server);
        $this->server->setMiddleware($middleware);
        $email = 'admin@example.com';
        $password = 'admin_test';
        $this->server->logIn($email, $password);
    }

    public function testInvalidEmail()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('UserExistsMiddleware: This email is not registered!');
        $middleware = new UserExistsHandler($this->server);
        $this->server->setMiddleware($middleware);
        $email = 'test@example.com';
        $password = 'admin_pass';
        $this->server->logIn($email, $password);
    }

    public function testInvalidRole()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Permission denied!');
        $middleware = new UserExistsHandler($this->server);
        $middleware->linkWith(new RoleCheckHandler());
        $this->server->setMiddleware($middleware);
        $email = 'user@example.com';
        $password = 'user_pass';
        $this->server->logIn($email, $password);
    }

    public function testInvalidThrottling()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('ThrottlingMiddleware: Request limit exceeded!');
        $middleware = new ThrottlingHandler(1);
        $this->server->setMiddleware($middleware);
        $email = 'test@example.com';
        $password = 'user_pass';
        $this->server->logIn($email, $password);
        $this->server->logIn($email, $password);
    }

}