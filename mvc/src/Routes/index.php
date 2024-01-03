<?php


use App\Controllers\MedController;
use App\Controllers\UserController;
use App\Router;

$router = new Router();


$router->get('/medicaments', MedController::class, 'index');
$router->post('/medicament', MedController::class, 'getMedicament');
$router->get('/search', MedController::class, 'search');
$router->post('/buy', MedController::class, 'buy');
$router->get('/home', UserController::class, 'home');
$router->post('/delete', UserController::class, 'delete');
$router->post('/add_user', UserController::class, 'add_user');
// echo '<pre>';
// var_dump($router);
// die();
// echo '</pre>';



$router->dispatch();
