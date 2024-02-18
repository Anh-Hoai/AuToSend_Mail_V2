<?php
namespace App\models;

use PDOException;
use App\models\BaseModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PDO;

// Include the Composer autoload file
require 'vendor/autoload.php';
class LoginAdminModel extends BaseModel
{
    public function LoginAdmin($username, $password)
    {
        try {
            $user = $this->getOne('users', 'usersname', $username);
            if ($user && $user['role_id'] == 1) {
                // Compare the plain-text password with the stored password
                if ($password === $user['password']) {
                    // Passwords match
                    $_SESSION['id_users'] = $user['id'];
                    $_SESSION['role_id'] = $user['role_id'];
                    $_SESSION['usersname'] = $user['usersname'];
                    $_SESSION['date'] = $user['date'];
                    $_SESSION['date_created'] = $user['date_created'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['address'] = $user['address'];
                    header('Location: /admin'); // Replace '/dashboard' with the desired URL
                } else {
                    // Passwords do not match
                echo "<script>alert('Tài Khoản Mật Khẩu Không Hợp Lệ');</script>";
                }
            } else {
                // User not found or has incorrect role
                echo 'Invalid username or role';
            }
        } catch (\Exception $e) {
            // Handle any exceptions that may occur
            echo 'Error: ' . $e->getMessage();
        }
    }
 

}


