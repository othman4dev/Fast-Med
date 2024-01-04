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
    public static function searchByName($name)
    {
        $db = Database::connect();
        $stmt = $db->prepare('SELECT * FROM medicament WHERE name LIKE ?');
        $stmt->execute(["%$name%"]);
        Database::close();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public static function reduceQuantity($id)
    {
        $db = Database::connect();
        $stmt = $db->prepare('UPDATE medicament SET quantity = quantity - 1 WHERE med_id = ?');
        $stmt->execute([$id]);
        Database::close();
    }
}
