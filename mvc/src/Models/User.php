<?php

namespace App\Models;

class User
{
    public $name;
    public $email;
    public $role;
    public static function  select_users()
    {
        $db = Database::connect();
        $query = $db->prepare('SELECT * FROM user ');
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
        Database::close();
    }

    public  function  delete($id)
    {
        $db = Database::connect();
        $query = $db->prepare('DELETE FROM user WHERE user_id=? ');
        $query->execute([$id]);
        return $query;
        Database::close();
    }
    public function add_user($user_name, $password, $email, $role)
    {
        $db = Database::connect();
        $query = $db->prepare('INSERT INTO `user` (`username`, `password`, `email`, `role`) VALUES (?, ?, ?, ?)');
        $query->execute([$user_name, $password, $email, $role]);
        Database::close();
        return $query;
    }
}
