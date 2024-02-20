<?php
namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\LoginClientModel;

class SigninClientController extends BaseController
{
    private $LoginClientModel;
    public function __construct()
    {
        $this->LoginClientModel = new LoginClientModel();
    }
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $role = 0;
            $date_create = date('h:i:s A d/m/Y');
            $name = $_POST['name'];
            $password = $_POST['password'];
            $passwordrp = $_POST['passwordrp'];

    
            
        
            
            if ($password == $passwordrp) {
                // Nếu giống nhau, gán giá trị vào biến passwordnew
                $passwordnew = $password;
            } else {
            }
            

            $this->LoginClientModel->CreateUser($name, $email, $role, $date_create, $passwordnew);
        }

        parent::view('LoginMasterLayout', ['pages' => 'SigninClientPage']);
    }

}
