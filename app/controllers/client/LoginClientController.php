<?php
namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\LoginClientModel;

class LoginClientController extends BaseController
{
    private $LoginClientModel;
    public function __construct()
    {
        $this->LoginClientModel = new LoginClientModel();
    }
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->LoginClientModel->LoginClient($username, $password);
        }
        parent::view('LoginMasterLayout', ['pages' => 'LoginClientPage']);
    }
    public function Forgot()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->LoginClientModel->LoginClient($username, $password);
        }
        parent::view('LoginMasterLayout', ['pages' => 'ForgotPage']);
    }

    
 
}
