<?php
namespace App\controllers\client;
use App\controllers\BaseController;
use App\models\ProductAdminModel;

class ShopClientController extends BaseController{
    private $ProductAdminModel;

    public function __construct(){
        $this->ProductAdminModel = new ProductAdminModel();
    }
    public function index(){
        $listproduct  = $this->ProductAdminModel->getAll('sanpham');

           parent::view('ClientMasterLayout',['pages'=>'ShopClientPage','listproduct' => $listproduct]);
    }
}