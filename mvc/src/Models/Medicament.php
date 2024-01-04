<?php

namespace App\Models;

class Medicament
{
    public static function fetchOne($id)
    {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * FROM medicament WHERE med_id = ?');
        $stmt->execute([$id]);
        Database::close();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
       
    }
    public static function fetchAll()
    {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * FROM medicament');
        $stmt->execute();
        Database::close();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public static function searchByName($name)
    {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * FROM medicament WHERE name LIKE ?');
        $stmt->execute(["%$name%"]);
        Database::close();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
    }
}
