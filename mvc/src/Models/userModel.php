<?php

namespace App\Models;

use App\Models\Database;


class UserModel
{
    private $db;

    public function __construct()
    {
        // Get an instance of the Database class
        $this->db = Database::connect();
    }

    public function getAllUsers()
    {
        // Fetch data from the "users" table
        $statement = $this->db->query("SELECT * FROM user");
        // Fetch data as an associative array
        $users = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $users;
    }

    public function login($email, $password)
    {
        session_start();
        $statement = $this->db->prepare("SELECT * FROM user WHERE email = :email");
        $statement->execute(['email' => $email]);
        $user = $statement->fetch(\PDO::FETCH_ASSOC);
    
        if ($user && password_verify($password, $user["password"])) {
            $_SESSION['id'] = $user['id'];
    
            if ($user['role'] == 'admin') {
                header("location: /admin");
            } elseif($user['role']=='patient_en_lign') {
                header("Location: /");
            }
        } else {
            echo $erreur = "Login or password is invalid!";
        }
    }

    public function register($username, $email, $hashedPassword)
    {
        // Exécuter une requête pour insérer un nouvel utilisateur
        $statement = $this->db->prepare("INSERT INTO user (username, email, password,role) VALUES (?, ?, ?,'patient_en_lign')");
        $statement->execute([$username, $email, $hashedPassword]);

        return $statement->rowCount(); // Retourne le nombre de lignes affectées par l'insertion
    }
}
?>
