<?php

require_once __DIR__ . '/../vendor/autoload.php';

use DI\Bridge\Slim\Bridge;
use DI\Container;
use Slim\Views\TwigMiddleware;
use Dotenv\Dotenv;

// Load Environment Variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// Create Container
$container = require __DIR__ . '/container.php';

// Create App
$app = Bridge::create($container);

// Add Twig-View Middleware
$app->add(TwigMiddleware::createFromContainer($app));

// Load Routes
require_once __DIR__ . '/../routes/web/pageRoutes.php';
require_once __DIR__ . '/../routes/api/adminApiRoutes.php';
