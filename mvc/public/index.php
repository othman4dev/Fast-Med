<?php
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$db = \App\Models\Database::connect();

$router = require '../src/Routes/index.php';
