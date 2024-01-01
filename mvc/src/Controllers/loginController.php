<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController
{
    public function loginUrl()
    {
        // Logique pour la page de connexion
    }

    public function registerUrl()
    {
        // Afficher la page d'inscription
        require(__DIR__ . '/../../../view/register.php');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            $userModel = new UserModel();
            $userModel->login($email, $password);
        }

        // Afficher la page de connexion
        // require(__DIR__ . '/../../../view/login.php');
    }

    public function register()
    {
        $userModel = new UserModel();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $users = $userModel->register($username, $email, $hashedPassword);
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
