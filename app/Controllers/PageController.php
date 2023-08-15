<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class PageController
{
    public function index(Request $request, Response $response)
    {
        $response->getBody()->write('Hello World');
        return $response;
    }
}
