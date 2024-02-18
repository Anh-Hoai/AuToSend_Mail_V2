<?php
namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\LoginClientModel;

class ResetPasswordController extends BaseController
{
    private $LoginClientModel;
    public function __construct()
    {
        $this->LoginClientModel = new LoginClientModel();
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $token = $_POST['token'];
            $password = $_POST['password'];
            $passwordrp = $_POST['passwordrp'];
            if ($password == $passwordrp) {
                // Nếu giống nhau, gán giá trị vào biến passwordnew
                $passwordnew = $password;
            } else {
                // Nếu không giống nhau, thông báo lỗi hoặc thực hiện các xử lý khác
                echo "Mật khẩu và lặp lại mật khẩu không khớp. Vui lòng thử lại!";
                die();
            }
            $this->LoginClientModel->UpdatePasswordUser($token,$passwordnew);

          
        }
        parent::view('LoginMasterLayout', ['pages' => 'ResetPasswordPage']);
    }

    
 
}