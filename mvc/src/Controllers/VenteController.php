<?php
namespace App\Controllers;
use App\Controller;
use App\Models\Medicament;
use App\Models\Vente;
class VenteController extends Controller{
    public function ventEnMagasinIndex(){
        $medicaments= Medicament::fetchAll();
        $this->render('admin/ajoutUserEnmagasin',['medicaments'=>$medicaments]);
    }
    public function addVentEnMagasin(){
      print_r($_POST);

    }
    public function ventDisplay(){
      $Vent = new Vente();
      $data['vents'] = $Vent->getAllVents();
      Controller::render('admin/vent',$data);
    }
}