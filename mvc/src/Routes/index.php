<?php


use App\Controllers\MedController;
use App\Controllers\UserController;
use App\Controllers\Authentification;
use App\Controllers\HomeController;
use App\Controllers\VenteController;
use App\Controllers\RapportController;
use App\Router;

$router = new Router();


$router->get('/medicaments', MedController::class, 'index');
$router->post('/medicament', MedController::class, 'getMedicament');
$router->get('/search', MedController::class, 'search');
$router->post('/buy', MedController::class, 'buy');
$router->get('/home', UserController::class, 'home');
$router->post('/delete', UserController::class, 'delete');
$router->post('/add_user', UserController::class, 'add_user');
$router->post('/update', UserController::class, 'update');






$router->get('/', HomeController::class, 'index');
$router->get('/gestionMedicament', MedController::class, 'medicamentDisplay');
$router->get('/gestionVent', VenteController::class, 'ventDisplay');
$router->get('/logout', HomeController::class, 'logout');

$router->get('/admin', HomeController::class, 'index');
$router->post('/register', Authentification::class, 'register');
$router->get('/login', Authentification::class, 'index');
$router->post('/', Authentification::class, 'login');
$router->get('/user', HomeController::class, 'user');
$router->get('/ajoutUserEnmagasin', VenteController::class, 'ventEnMagasinIndex');
//par exemple had  'insert' hia dik la méthode li tanderoha f controller bhal hadi raha kaina f HomeController
//ana la bghit nder chi whda khra par exemple i9der ncreer whda khrra (loginController)
$router->post('/insert', HomeController::class, 'insert');
$router->post('/newVenteMagasin', VenteController::class, 'addVentEnMagasin');

$router->get('/RaportVent', RapportController::class, 'getRapportVent');
$router->get('/RapportStock', RapportController::class, 'getRapportStock');

$router->dispatch();
// echo '<pre>';
// var_dump($router);
// die();
// echo '</pre>';
