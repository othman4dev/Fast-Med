<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Journal;

class HomeController extends Controller
{
    public function index()
    {
        $journals = [
            new Journal('My Third Journal Entry', '2023'),
            new Journal('My Second Journal Entry', '2022'),
            new Journal('My Second Journal', '2021')
        ];

        $this->render('index', ['journals' => $journals]);
    }
    
    public function user()
    {
        
        $this->render('user');
    }
    public function insert()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = isset($_POST["username"]) ? $_POST["username"] : "";
            $email = isset($_POST["password"]) ? $_POST["password"] : "";
            $this->render('layout/home', ['name' => $name]);
        }
    }
}
