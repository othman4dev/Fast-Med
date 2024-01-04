<?php

namespace App\Models;

class VenteEnLign extends Vente 
{
    public static function fetchOne($med_id, $user_id)
    {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM vente WHERE med_id = ? AND user_id = ? AND type = 'en_lign'");
        $stmt->execute([$med_id, $user_id]);
        Database::close();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
      
    }

    public static function add($med_id, $date, $user_id)
    {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO vente VALUES (NULL, ?, ?, ?, 'en_lign')");
        $stmt->execute([$med_id, $date, $user_id]);
        Database::close();
    }
}
l;