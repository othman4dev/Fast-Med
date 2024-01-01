<?php

namespace App\Controllers;

use App\Controller;


class HomeController extends Controller
{
   
    
    public function index()
    {
        
        $this->render('index');
    }
    public function admin()
    {
        
        $this->render('admin/index');
    }
    public function insert()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = isset($_POST["username"]) ? $_POST["username"] : "";
            $email = isset($_POST["email"]) ? $_POST["email"] : "";
            $this->render('layout/home', ['name' => $name]);
        }
    }
    public function login(){
        $this->render('login');
    }
}
