<?php
namespace App\models;
use App\models\Vente;
Class RapportVent extends Rapport{
    public function getAllVents(){
        $vents = new Vente();
        return $vents->getAllVents();
    }
}