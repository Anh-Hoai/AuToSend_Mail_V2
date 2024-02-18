<?php

namespace App\core;

class CheckLogin
{
    
    public function CheckLogin()
    {
        if (!isset($_SESSION['auth']) || $_SESSION['auth'] != true) {
            header('Location: /');
        }
    }


    
}