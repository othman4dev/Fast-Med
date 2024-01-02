<?php
require '../vendor/autoload.php';

session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
// $dotenv->load();

// print_r($_ENV);
$router = require '../src/Routes/index.php';
