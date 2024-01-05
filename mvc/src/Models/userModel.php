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

  

 
}
?>
