<?php
namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\ProfileModel;

class UpdateProfileController extends BaseController
{
    private $ProfileModel;
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
    }
    public function index()
    {
      
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
            $this->ProfileModel->updateprofileuser($date, $address,$id_users,$avatar);

        }
        parent::view('MasterLayout', ['pages' => 'UpdateProfilePage']);
    }
  

    
 
}