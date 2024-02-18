<?php
namespace App\controllers\admin;

use App\controllers\BaseController;
use App\models\LoginAdminModel;

class LoginAdminController extends BaseController
{
    private $LoginAdminModel;
    public function __construct()
    {
        $this->LoginAdminModel = new LoginAdminModel();
    }
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->LoginAdminModel->LoginAdmin($username, $password);

        }
        parent::view('LoginMasterLayout', ['pages' => 'LoginAdminPage']);
    }

    
 
}
