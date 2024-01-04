<?php
namespace App\models;

interface Authenticable{
    public static function register($username, $email, $hashedPassword);
    public static function login($email, $password);
}