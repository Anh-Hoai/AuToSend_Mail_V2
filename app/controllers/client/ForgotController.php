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
        
            // Check if email is not empty
            if (!empty($email)) {
                // Generate a token and hash it
                $token = bin2hex(random_bytes(16));
                $token_hash = hash("sha256", $token);
        
                // Call the Forgot method
                $this->LoginClientModel->Forgot($email, $token_hash);
            } else {
                // Handle the case where email is empty
                echo '<script>alert("Email cannot be empty.");</script>';
                // You might want to redirect or perform additional actions here
            }
        }
        
        parent::view('LoginMasterLayout', ['pages' => 'ForgotPage']);
    }

    
 
}