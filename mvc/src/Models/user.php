<?php

namespace App\Models;

use App\Models\Database;

class User
{
    private $db;

    public $user_id;
    public $username;
    public $password;
    public $email;
    public $role;

    private $user= "users"; // Ajoutez le nom de votre table ici

    public function __construct($username, $email, $password, $role)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;

        // Get an instance of the Database class
        $this->db = Database::connect();
    }

    public function getId()
    {
        return $this->user_id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setId($id)
    {
        $this->user_id = $id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->user . " (username, email, password, role) VALUES (:username, :email, :password, :role)";
        $stmt = $this->db->prepare($query);
    
        // Assurez-vous que le mot de passe est haché avant d'exécuter la requête
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
    
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $this->role);
    
        if ($stmt->execute()) {
            return true;
        }
    
        return false;
    }
    
    
}
