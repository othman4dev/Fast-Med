<?php
namespace App\Models;

class PatientEnLign extends Patient implements Authenticable{
    public static function login($email, $password)
    {
        $db= Database::connect();
        $statement = $db->prepare("SELECT * FROM user WHERE email = :email");
        $statement->execute(['email' => $email]);
        $user = $statement->fetch(\PDO::FETCH_ASSOC);
        if ($user && password_verify($password, $user["password"])) {
            $_SESSION['id'] = $user['user_id'];
            $_SESSION['role_user'] = $user['role'];
           
            Database::close();
            return true;
            // if ($user['role'] == 'admin') {
            //     header("location: /admin");
            // } elseif($user['role']=='patient_en_lign') {
            //     header("Location: /");
            // }
        } else {
            Database::close();
            // echo $erreur = "Login or password is invalid!";
            return false;
        }
       
    }
    public static function register($username, $email, $hashedPassword)
    {
        $db= Database::connect();
        // Exécuter une requête pour insérer un nouvel utilisateur
        $statement =$db->prepare("INSERT INTO user (username, email, password,role) VALUES (?, ?, ?,'patient_en_lign')");
        $statement->execute([$username, $email, $hashedPassword]);
        Database::close();
        return $statement->rowCount(); 
    }
}