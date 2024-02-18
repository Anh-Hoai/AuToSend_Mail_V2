<?php
namespace App\controllers\admin;

use App\controllers\BaseController;
use App\models\ProfileModel;

class ProfileAdminController extends BaseController
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
    
      
        
        parent::view('MasterLayout', ['pages' => 'ProfileAdminPage', 'users' => $users]);
    }
       
    
    public function logout()
    {

        $this->ProfileModel->logoutadmin();
    }



}