<?php

namespace App\Models;

class addVentEnMagasin extends Vente
{
    public function addvente($med_id, $name){
        $db = Database::connect();
        $stmt= $db->prepare("INSERT INTO vente");
    }
}