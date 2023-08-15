<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

# Create App
$app = AppFactory::create();

# Load Routes
require_once __DIR__ . '/../routes/web/pageRoutes.php';
require_once __DIR__ . '/../routes/api/adminApiRoutes.php';
