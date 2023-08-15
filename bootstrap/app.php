<?php

require_once __DIR__ . '/../vendor/autoload.php';

use DI\Bridge\Slim\Bridge;
use DI\Container;

# Create Container
$container = new Container();

# Create App
$app = Bridge::create($container);

# Load Routes
require_once __DIR__ . '/../routes/web/pageRoutes.php';
require_once __DIR__ . '/../routes/api/adminApiRoutes.php';
