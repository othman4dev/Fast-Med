<?php

namespace App\Controllers;
use App\Models\UserModel;
class AjoutUserEnmagasinController{
    public function AjoutUserEnmagasinController(){
        $username=$_POST['username'];
        $medID=$_POST['name'];
        $user = new UserModel();


    }
}