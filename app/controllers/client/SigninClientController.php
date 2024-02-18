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

            // Kiểm tra tên người dùng
            if (preg_match('/^[a-zA-Z0-9]{8,}$/', $name)) {
                // Tên người dùng hợp lệ
                echo "<script>alert('Tên người dùng hợp lệ.');</script>";
            } else {
                // Tên người dùng không hợp lệ
                echo "<script>alert('Tên người dùng không hợp lệ. Phải có ít nhất 8 ký tự và không chứa kí tự đặc biệt.');</script>";
            }
            
            // Kiểm tra mật khẩu
            if (strlen($password) >= 8 && !preg_match('/\s/', $password)) {
                // Mật khẩu hợp lệ
                echo "<script>alert('Mật khẩu hợp lệ.');</script>";
            } else {
                // Mật khẩu không hợp lệ
                echo "<script>alert('Mật khẩu không hợp lệ. Phải có ít nhất 8 ký tự và không chứa khoảng trắng.');</script>";
            }
            
            // Kiểm tra xem mật khẩu và lặp lại mật khẩu giống nhau hay không
            if ($password == $passwordrp) {
                // Nếu giống nhau, gán giá trị vào biến passwordnew
                $passwordnew = $password;
            } else {
                // Nếu không giống nhau, thông báo lỗi hoặc thực hiện các xử lý khác
                echo "<script>alert('Mật khẩu và lặp lại mật khẩu không khớp. Vui lòng thử lại!');</script>";
            }
            

            $this->LoginClientModel->CreateUser($name, $email, $role, $date_create, $passwordnew);
        }

        parent::view('LoginMasterLayout', ['pages' => 'SigninClientPage']);
    }

}
