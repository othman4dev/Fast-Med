<?php

namespace App\Models;

class Medicament
{
    public static function fetchOne($id)
    {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * FROM medicament WHERE med_id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
        Database::close();
    }
    public static function searchByName($name)
    {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * FROM medicament WHERE name LIKE ?');
        $stmt->execute(["%$name%"]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        Database::close();
    }
}
