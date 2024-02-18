<?php
namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\LoginClientModel;

class ForgotController extends BaseController
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
            $token = bin2hex(random_bytes(16));
        $token_hash = hash("sha256", $token);
            $this->LoginClientModel->Forgot($email,$token_hash);
        }
        parent::view('LoginMasterLayout', ['pages' => 'ForgotPage']);
    }

    
 
}