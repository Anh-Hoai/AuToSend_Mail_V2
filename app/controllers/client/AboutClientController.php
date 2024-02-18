<?php
namespace App\controllers\client;
use App\controllers\BaseController;
class AboutClientController extends BaseController{
    public function __construct(){
  
    }
    public function index(){
        parent::view('ClientMasterLayout',['pages'=>'AboutClientPage']);
    }
}