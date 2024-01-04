<?php

namespace App;

class Controller
{
    public static function render($view, $data = [])
    {
        extract($data);

        // include "Views/$view.php";
        include "../views/$view.php";
    }
}
