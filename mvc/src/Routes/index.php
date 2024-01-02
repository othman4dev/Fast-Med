<?php

use App\Controllers\AdminController;
use App\Controllers\HomeController;
use App\Router;



$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/user', HomeController::class, 'user');
$router->post('/insert', HomeController::class, 'insert');
$router->get('/home', AdminController::class, 'home');

$router->dispatch();
