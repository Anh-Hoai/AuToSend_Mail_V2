<?php
namespace App\models;

use PDOException;
use App\models\BaseModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PDO;

// Include the Composer autoload file
require 'vendor/autoload.php';
class LoginClientModel extends BaseModel
{
    public function LoginClient($username, $password)
    {
        try {
            $user = $this->getOne('users', 'usersname', $username);
            if ($user && $user['role_id'] == 0) {
                // Compare the plain-text password with the stored password
                if ($password === $user['password']) {
                    // Passwords match
                    $_SESSION['auth'] = true;
                    $_SESSION['usersname'] = $user['usersname'];
                    $_SESSION['date'] = $user['date'];
                    $_SESSION['date_created'] = $user['date_created'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['address'] = $user['address'];
                    header('Location: /'); // Replace '/dashboard' with the desired URL
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

    public function Forgot($email, $token_hash)
    {
        try {
            // Get user data
            $user = $this->getOne('users', 'email', $email);

            // Update user's token
            if ($user) {
                $token_main = $token_hash; // Assign the token value
                $update = $this->update('users', ['token' => $token_main], 'email', $email);

                if ($update) {
                    // If update is successful, send email
                    $this->SendMail($email, $token_main);
                    echo 'Password reset email sent successfully.';
                } else {
                    // If update fails
                    echo 'Error updating token.';
                }
            } else {
                // User not found
                echo 'Email not found.';
            }
        } catch (\Exception $e) {
            // Handle any exceptions that may occur
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function SendMail($email, $token_main)
    {

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'phamanhhoaipl@gmail.com';
            $mail->Password = 'ufdsdcmzkajihxox';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Sender and recipient settings
            $mail->setFrom('phamanhhoaipl@gmail.com', 'Your Name'); // Update with your actual email and name
            $mail->addAddress($email, 'Forgot Password'); // Assuming $Mail contains the recipient email
            $resetLink = 'http://localhost:8000/resetpassword?token=' . $token_main . '';  // Replace with the actual reset password page URL
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Reset password';
            $mail->Body = 'Click the following link to reset your password: <a href="' . $resetLink . '">Reset Password</a>';


            // Send the email
            $mail->send();

            // If the email is sent successfully, redirect to the dashboard
            header('Location: /'); // Replace '/dashboard' with the desired URL
            exit();
        } catch (Exception $e) {
            // If there's an error in sending the email, display the error message
            echo "Mailer Error: {$mail->ErrorInfo}";
        }



    }
    public function CreateUser($name, $email, $role, $date_create, $passwordnew)
    {
        try {

        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay không
        $user = $this->getOne('users', 'email', $email);

        // Nếu tồn tại, không thực hiện việc chèn dữ liệu
        if ($user) {
            echo "<script>alert('Email đã tồn tại. Không thể thêm người dùng.');</script>";
        } else {
            // Thực hiện chèn dữ liệu vào cơ sở dữ liệu
            $this->insert('users', [
                'usersname' => $name,
                'password' => $passwordnew,
                'email' => $email,
                'role_id' => $role,
                'date_created' => $date_create,
            ]);
            echo "<script>alert('Thêm người dùng thành công');</script>";
            
            header("Location: /loginclient");

        }
    } catch (\Exception $e) {
        // Handle any exceptions that may occur
        echo 'Error: ' . $e->getMessage();
    }
    }
    public function UpdatePasswordUser($token, $passwordnew)
    {
        $update = $this->update('users', ['password' => $passwordnew], 'token', $token);
        if ($update) {
            // If update is successful, send email
            sleep(3);
            header("Location: /");
        } else {
            // If update fails

        }
    }


}


