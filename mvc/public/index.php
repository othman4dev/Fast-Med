<?php
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "./../");
$dotenv->load();

// print_r($_ENV);
$router = require '../src/Routes/index.php';



