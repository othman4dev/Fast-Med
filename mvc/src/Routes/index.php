<?php

use App\Controllers\HomeController;
use App\Controllers\MedController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/user', HomeController::class, 'user');
$router->post('/insert', HomeController::class, 'insert');
$router->get('/medicaments', MedController::class, 'index');

$router->dispatch();
