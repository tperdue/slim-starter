<?php

// bootstrap/container.php

use DI\Container;
use Slim\Views\Twig;

// Create and return a new Container
$container = new Container();

// App Settings
$container->set('settings', function () {
    return [
        'app' => [
            'name' => 'Slim 4 Skeleton',
        ]
    ];
});

// Set view in Container
$container->set('view', function () {
    return Twig::create(__DIR__ . '/../views');
});


return $container;
