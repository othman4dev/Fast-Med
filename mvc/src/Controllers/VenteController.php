<?php
namespace App\Controllers;
use App\Controller;
use App\Models\Medicament;
class VenteController extends Controller{
    public function ventEnMagasinIndex(){
        $medicaments= Medicament::fetchAll();
        $this->render('admin/ajoutUserEnmagasin',['medicaments'=>$medicaments]);
    }
    public function addVentEnMagasin(){
      print_r($_POST);

    }
}