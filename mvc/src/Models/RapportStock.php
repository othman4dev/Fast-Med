<?php
namespace App\models;
use App\Models\Medicament;
Class RapportStock extends Rapport{
    public function getAllMedicament(){
        $stock = new Medicament();
        return $stock->allMedicament();
    }
}