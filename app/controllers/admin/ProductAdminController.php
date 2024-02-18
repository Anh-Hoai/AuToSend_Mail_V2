<?php
namespace App\controllers\admin;

use App\controllers\BaseController;
use App\models\ProductAdminModel;

class ProductAdminController extends BaseController
{
    private $ProductAdminModel;

    public function __construct()
    {
        $this->ProductAdminModel = new ProductAdminModel();
    }
    public function index()
    {
        if(isset($_SESSION['id_users'])){
            $id=$_SESSION['id_users'];
            $main  = $this->ProductAdminModel->getOne('users', 'id', $id);
            if ($main) {
                $users =['id' => $main];
            }
        }
        $list  = $this->ProductAdminModel->getAll('sanpham');


        // parent::view('AdminMasterLayout', ['pages' => 'ProductAdminPage', 'users' => $users,'list' => $list]);
        $this->view('AdminMasterLayout', [
            'pages' => 'ProductAdminPage',
            'users' => $users,
            'list' => $list

        ]);
    }
    public function DeleteProduct()
    {
            $id_sp =$_GET['id'];
            $this->ProductAdminModel->delete('sanpham','product_id',$id_sp);
            header('Location: /admin'); // Replace '/dashboard' with the desired URL
    
    }
    
    public function CreateProduct()
    {
        if(isset($_SESSION['id_users'])){
            $id=$_SESSION['id_users'];
            $main  = $this->ProductAdminModel->getOne('users', 'id', $id);
            if ($main) {
                $users =['id' => $main];
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_qty = $_POST['product_qty'];
            $product_title = $_POST['product_title'];
            $date_create = date('h:i:s A d/m/Y');
            $category_id = $_POST['category_id'];

            $avatar = '';
        
            if (isset($_FILES['product_img']['name']) && $_FILES['product_img']['name'] != '') {
                $avatar = $_FILES['product_img']['name'];
                $avatar_tmp = $_FILES['product_img']['tmp_name'];
                $targetDirectory = 'public/hinhanhpet/';
                $targetPath = $targetDirectory . $avatar;
        
                if (!move_uploaded_file($avatar_tmp, $targetPath)) {
                    echo "<script>alert('Error updating image.');</script>";
                    exit();
                }
            } else {
                echo "<script>alert('Error: Image is required.');</script>";
                exit();
            }
            if (empty($category_id)) {
                echo "<script>alert('Error: Please select a category.');</script>";
                exit();
            }
        
            if (empty($product_name) || empty($product_price) || empty($product_qty) || empty($product_title)) {
                echo "<script>alert('Error: Please fill in all fields.');</script>";
                exit();
            }
        
            $specialChars = '/[*|\":<>[\]{}`\\()\'@&$]/';
            if (preg_match($specialChars, $product_name) || preg_match($specialChars, $product_title)) {
                echo "<script>alert('Error: Product name and title cannot contain special characters.');</script>";
                exit();
            }
        
            $this->ProductAdminModel->CreateProduct($product_name, $product_price, $product_qty, $product_title, $avatar, $date_create,$category_id);
        }
        $category  = $this->ProductAdminModel->getAll('category');
        
        $list  = $this->ProductAdminModel->getAll('sanpham');
        $this->view('AdminMasterLayout', [
            'pages' => 'CreatedProductAdminPage',
            'users' => $users,
            'list' => $list,
            'category' => $category


        ]);

    }
    public function UpdateProduct()
    {

        if(isset($_SESSION['id_users'])){
            $id=$_SESSION['id_users'];
            $main  = $this->ProductAdminModel->getOne('users', 'id', $id);
            if ($main) {
                $users =['id' => $main];
            }
        }
 
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $product_id= $_GET['id'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_qty = $_POST['product_qty'];
            $product_title = $_POST['product_title'];
            $category_id = $_POST['category_id'];

            $avatar = '';
        
            if (isset($_FILES['product_img']['name']) && $_FILES['product_img']['name'] != '') {
                $avatar = $_FILES['product_img']['name'];
                $avatar_tmp = $_FILES['product_img']['tmp_name'];
                $targetDirectory = 'public/hinhanhpet/';
                $targetPath = $targetDirectory . $avatar;
        
                if (!move_uploaded_file($avatar_tmp, $targetPath)) {
                    echo "<script>alert('Error updating image.');</script>";
                    exit();
                }
            } else {
                echo "<script>alert('Error: Image is required.');</script>";
                exit();
            }
        
            if (empty($product_name) || empty($product_price) || empty($product_qty) || empty($product_title)) {
                echo "<script>alert('Error: Please fill in all fields.');</script>";
                exit();
            }
            if (empty($category_id)) {
                echo "<script>alert('Error: Please select a category.');</script>";
                exit();
            }
            $specialChars = '/[*|\":<>[\]{}`\\()\'@&$]/';
            if (preg_match($specialChars, $product_name) || preg_match($specialChars, $product_title)) {
                echo "<script>alert('Error: Product name and title cannot contain special characters.');</script>";
                exit();
            }
        
            $this->ProductAdminModel->UpdateProduct($product_id,$product_name, $product_price, $product_qty, $product_title, $avatar,$category_id);
        }
            // Lấy giá trị 'id' từ URL
            // Gọi hàm getOne để lấy thông tin sản phẩm
           
    
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $productInfo =$this ->ProductAdminModel->getOne('sanpham', 'product_id', $id);
                if ($productInfo) {
                    $Getproductid =['id' => $productInfo];
                }
            }
            $category  = $this->ProductAdminModel->getAll('category');
     
        $this->view('AdminMasterLayout', [
            'pages' => 'UpdateProductAdminPage',
            'users' => $users,
            'getproduct' => $Getproductid,
            'category' => $category

        ]);

    }

   

}