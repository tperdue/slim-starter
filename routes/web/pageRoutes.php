<?php

use App\Controllers\PageController;



$app->get('/', PageController::class . ':index')->setName('home');
