<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class PageController extends BaseController
{
    public function index(Request $request, Response $response)
    {

        $appName = $this->container->get('settings')['app']['name'];
        return $this->container->get('view')->render($response, 'home.twig', ['appName' => $appName]);
    }
}
