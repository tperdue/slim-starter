<?php

// bootstrap/container.php

use DI\Container;

# Create and return a new Container
$container = new Container();

# App Settings
$container->set('settings', function () {
    return [
        'app' => [
            'name' => 'Slim 4 Skeleton',
        ]
    ];
});

return $container;
