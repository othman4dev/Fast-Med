<?php

namespace App\Controllers;

use App\Controller;

class AdminController
{

    function home()
    {

        require __DIR__ . "/../../views/admin/index.php";
    }
}
