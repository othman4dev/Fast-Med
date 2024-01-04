<?php

namespace App\Controllers;

use App\Controller;


class HomeController extends Controller
{
   
    
    public static function index($data=[]) {
        if(isset($_SESSION['role_user'])){
            if($_SESSION['role_user']=="admin")
            Controller::render('admin/index',$data);
            if($_SESSION['role_user']=="patient_en_lign") 
            Controller::render('index',$data);
        }else Controller::render('index',$data);   
    }
   
    public function insert()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = isset($_POST["username"]) ? $_POST["username"] : "";
            $email = isset($_POST["email"]) ? $_POST["email"] : "";
            $this->render('layout/home', ['name' => $name]);
        }
    }
 
    
}
