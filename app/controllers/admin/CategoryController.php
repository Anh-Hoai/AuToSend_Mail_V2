<?php
namespace App\controllers\admin;

use App\controllers\BaseController;
use App\models\CategoryModel;

class CategoryController extends BaseController
{
    private $CategoryModel;

    public function __construct()
    {
        $this->CategoryModel = new CategoryModel();
    }
    public function index()
    {
        if (isset($_SESSION['id_users'])) {
            $id = $_SESSION['id_users'];
            $main = $this->CategoryModel->getOne('users', 'id', $id);
            if ($main) {
                $users = ['id' => $main];
            }
        }
        $list = $this->CategoryModel->getAll('category');


        $this->view('AdminMasterLayout', [
            'pages' => 'CategoryAdminPage',
            'users' => $users,
            'category' => $list
        ]);
    }

    public function DeleteCategory()
    {
        $id_category = $_GET['category_id'];
        $this->CategoryModel->delete('category', 'id', $id_category);
        header('Location: /admin'); // Replace '/dashboard' with the desired URL

    }
    public function CreatedCategory()
    {

        if (isset($_SESSION['id_users'])) {
            $id = $_SESSION['id_users'];
            $main = $this->CategoryModel->getOne('users', 'id', $id);
            if ($main) {
                $users = ['id' => $main];
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_name = $_POST['category_name'];
            $category_tilte = $_POST['category_tilte'];
            $this->CategoryModel->CreateCategory($category_name,$category_tilte);
        }
        $this->view('AdminMasterLayout', [
            'pages' => 'CreatedCategoryPage',
            'users' => $users,

        ]);

    }
    public function UpdateProduct()
    {

        if(isset($_SESSION['id_users'])){
            $id=$_SESSION['id_users'];
            $main  = $this->CategoryModel->getOne('users', 'id', $id);
            if ($main) {
                $users =['id' => $main];
            }
        }
 
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $category_id= $_GET['category_id'];
        $category_name = $_POST['category_name'];
        $category_tilte = $_POST['category_tilte'];


        
            $this->CategoryModel->UpdateCategory($category_id,$category_name,$category_tilte);
        }
            // Lấy giá trị 'id' từ URL
            // Gọi hàm getOne để lấy thông tin sản phẩm
           
    
            if(isset($_GET['category_id'])){
                $category_id= $_GET['category_id'];
                $categoryInfo =$this ->CategoryModel->getOne('category', 'id', $category_id);
                if ($categoryInfo) {
                    $Getcategory =['id' => $categoryInfo];
                }
            }
     
        $this->view('AdminMasterLayout', [
            'pages' => 'UpdateCategoryAdminPage',
            'users' => $users,
            'getcategory' => $Getcategory

        ]);

    }




}