<?php
namespace App\controllers\client;
use App\controllers\BaseController;
use App\models\ProductAdminModel;

class CartController extends BaseController{
    private $ProductAdminModel;

    public function __construct(){
        $this->ProductAdminModel = new ProductAdminModel();
    }
    public function index(){

           parent::view('ClientMasterLayout',['pages'=>'CartClientPage']);
    }
}