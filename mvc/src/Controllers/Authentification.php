<?php

namespace App\Controllers;

use App\Controller;
use App\Controllers\HomeController;
use App\Models\PatientEnLign;

class Authentification extends Controller
{
  
    public function index(){
        $this->render('login');
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            
            $result = PatientEnLign::login($email, $password);
            if($result)
            HomeController::index();
            else Controller::render('login');

        }

      
    }

    public function register()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $users = PatientEnLign::register($username, $email, $hashedPassword);
            if ($users) {
                header("location:/login");
                exit(); // Terminer le script après la redirection
            } else {
                $errorMessage = "Registration failed. Please try again.";
            }
        }

        // Afficher la page d'inscription avec éventuellement le message d'erreur
        require(__DIR__ . '/../../../view/register.php');
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location:/');
        exit();
    }
}
