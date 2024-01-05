<?php

namespace App\Models;
class Vente
{
    public function getAllVents(){
        $db = Database::connect();
        $stmt=$db->prepare("SELECT * FROM user NATURAL JOIN vente NATURAL JOIN medicament");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}
