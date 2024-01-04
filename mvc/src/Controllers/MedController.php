<?php

namespace App\Controllers;

use App\Models\Medicament;
use App\Models\VenteEnLign;

class MedController
{
    public function setJsonHeader()
    {
        header('content-type: application/json');
    }

    public function index()
    {
        require __DIR__ . '/../../views/user/products.php';
    }

    public function getMedicament()
    {
        $this->setJsonHeader();
        $postData = json_decode(file_get_contents("php://input"));
        $medicament = Medicament::fetchOne($postData->med_id);
        echo json_encode($medicament);
    }

 

    public function search()
    {
        $this->setJsonHeader();
        $name = $_GET['name'];
        $medicaments = Medicament::searchByName($name);
        echo json_encode($medicaments);
    }

    public function buy()
    {
        $this->setJsonHeader();
        $med_id = json_decode(file_get_contents('php://input'))->id;
        $user_id = $_SESSION['id'] ?? 1;

        # Check if exist :
        $result = VenteEnLign::fetchOne($med_id, $user_id);

        if ($result) echo json_encode(["msg" => 'Already Exist']);
        else {
            VenteEnLign::add($med_id, date('Y-m-d'), $user_id);
            echo json_encode(["msg" => 'Operation Success']);
        }
    }
}
