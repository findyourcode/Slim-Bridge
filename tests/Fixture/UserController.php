<?php

namespace DI\Bridge\Slim\Test\Fixture;

use Psr\Http\Message\ResponseInterface;

class UserController
{
    public function dashboard(ResponseInterface $response)
    {
        $response->getBody()->write('Hello world!');

        return $response;
    }
}
