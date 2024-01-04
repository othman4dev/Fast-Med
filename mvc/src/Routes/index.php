<?php

use App\Controllers\MedController;
use App\Controllers\RapportController;
use App\Router;

$router = new Router();

$router->get('/medicaments', MedController::class, 'index');
$router->post('/medicament', MedController::class, 'getMedicament');
$router->get('/search', MedController::class, 'search');
$router->post('/buy', MedController::class, 'buy');

$router->get('/RaportVent', RapportController::class,'getRapportVent');
$router->get('/RapportStock', RapportController::class,'getRapportStock');

$router->dispatch();
