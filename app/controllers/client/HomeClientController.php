<?php
namespace App\controllers\client;
use App\controllers\BaseController;
class HomeClientController extends BaseController{
    public function __construct(){
      
    }
    public function index(){
          parent::view('ClientMasterLayout',['pages'=>'ClientPage']);
    }
}