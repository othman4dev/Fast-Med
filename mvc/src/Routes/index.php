<?php
ini_set('display_errors','on');
use App\Controllers\HomeController;
use App\Controllers\loginController;

use App\Router;

$router = new Router;

$router->get('/', HomeController::class, 'index');
$router->get('/admin', HomeController::class, 'admin');
$router->post('/register', loginController::class, 'register');
$router->get('/login', HomeController::class, 'login');
$router->post('/login', loginController::class, 'login');
$router->get('/user', HomeController::class, 'user');
//par exemple had  'insert' hia dik la méthode li tanderoha f controller bhal hadi raha kaina f HomeController
//ana la bghit nder chi whda khra par exemple i9der ncreer whda khrra (loginController)
$router->post('/insert', HomeController::class, 'insert');


$router->dispatch();
