<?php

use App\Controllers\MedController;
use App\Router;

$router = new Router();

$router->get('/medicaments', MedController::class, 'index');
$router->post('/medicament', MedController::class, 'getMedicament');
$router->get('/search', MedController::class, 'search');
$router->post('/buy', MedController::class, 'buy');

$router->dispatch();
