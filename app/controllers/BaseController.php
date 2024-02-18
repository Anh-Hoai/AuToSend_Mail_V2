<?php   
namespace App\controllers;
class BaseController{

    public function model($model)
    {
        require_once './app/models/' . $model . '.php';
    }
    public function view($view, $data = array())
    {
        require_once './app/views/' . $view . '.php';
    }
    
}