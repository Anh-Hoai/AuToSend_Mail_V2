<?php
namespace App\controllers\client;
use App\controllers\BaseController;
use App\models\ProductAdminModel;

class ShopsingerClientController extends BaseController{
    private $ProductAdminModel;

    public function __construct(){
        $this->ProductAdminModel = new ProductAdminModel();
    }
    public function index(){
        if(isset($_GET['id_product'])){
            $id_product=$_GET['id_product'];
            $productInfo =$this ->ProductAdminModel->getOne('sanpham', 'product_id', $id_product);
            if ($productInfo) {
                $Getproductid =['id' => $productInfo];
            }
        }

           parent::view('ClientMasterLayout',['pages'=>'ShopsingerClientPage','GetProductId' => $Getproductid]);
    }
}