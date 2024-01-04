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
    public function slect($id)
    {
        $db = Database::connect();
        $querySelect = $db->prepare('SELECT * from user where user_id=?');
        $querySelect->execute([$id]);
        Database::close();
        return $querySelect->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function update($id, $email, $username, $role)
    {
        $db = Database::connect();
        $update = $db->prepare('UPDATE user set email=?,role=?,username=? where user_id=?');
        $update->execute([$email, $role, $username, $id]);
        Database::close();
        return $update;
    }
}
