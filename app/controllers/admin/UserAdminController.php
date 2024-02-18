<?php
namespace App\controllers\admin;

use App\controllers\BaseController;
use App\models\ProfileModel;

class UserAdminController extends BaseController
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
        $list  = $this->ProfileModel->getAll('users');


        parent::view('AdminMasterLayout', ['pages' => 'UserAdminPage', 'list' => $list, 'users' => $users]);
    }
}