<?php
namespace App\controllers\admin;

use App\controllers\BaseController;
use App\models\ProfileModel;

class UpdateProfileAdminController extends BaseController
{
    private $ProfileModel;
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
    }
    public function index()
    {
        if(isset($_SESSION['id_users'])){
            $id=$_SESSION['id_users'];
            $main  = $this->ProfileModel->getOne('users', 'id', $id);
            if ($main) {
                $users =['id' => $main];
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_users = $_POST['id_users'];
       
            $date = $_POST['date'];
            $address = $_POST['address'];
            $oldimage=$this->ProfileModel->GetImgOld();

            if (isset($_FILES['avatar']['name']) && $_FILES['avatar']['name'] != '') {
                $avatar = $_FILES['avatar']['name'];
                $avatar_tmp = $_FILES['avatar']['tmp_name'];
                $targetDirectory = 'public/upload/';
                $targetPath = $targetDirectory . $avatar;
                move_uploaded_file($avatar_tmp, $targetPath);
            }  else {
                $avatar = $oldimage;
            }
            $this->ProfileModel->updateprofileadmin($date, $address,$id_users,$avatar);

        }
        parent::view('MasterLayout', ['pages' => 'UpdateProfileAdminPage', 'users' => $users]);
    }
  

    
 
}