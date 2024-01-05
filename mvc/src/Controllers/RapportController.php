<?php

namespace App\Controllers;
use App\Controller;
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
use App\Models\RapportVent;
use App\Models\RapportStock;

class RapportController {
    public function generateRapport($Model,$action,$dataName,$view,$randerView){
        $allData= new $Model();
        $data[$dataName]=$allData->$action();
        Controller::render('admin/'.$view,$data);
        $dompdf=new Dompdf();
        $dompdf->loadHtml($_SESSION['rapportVent']);
        $dompdf->setPaper('A4','lnandscape');
        $dompdf->render();
        $filename =$view.'_'. date('Y-m-d') . '.pdf'; 
        $dompdf->stream($filename);
        Controller::render('admin/'.$randerView,$data);
    }
    public function index(){
        Controller::render('admin/Rapport');
    }
    public function getRapportVent() {
        $this->generateRapport(RapportVent::class,'getAllVents','vents','ventRapport','vent');
    }
    public function getRapportStock(){
        $this->generateRapport(RapportStock::class,'getAllMedicament','medicament','StockRapport','medicament');
    }

}
