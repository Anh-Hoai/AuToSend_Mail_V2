<?php

namespace App\models;

use App\models\BaseModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include the Composer autoload file
require 'vendor/autoload.php';

class AutoSendModel extends BaseModel {
  
    public function sendContactEmail($contacts) {
        try {
            // Khởi tạo đối tượng PHPMailer
            $mail = new PHPMailer(true);

            // Cấu hình thông tin đăng nhập SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'phamanhhoaipl@gmail.com';
            $mail->Password = 'ufdsdcmzkajihxox';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587 ;
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            // $mail->Port = 465;
            
            // Thiết lập người nhận và nội dung email
            $mail->setFrom('your_gmail@gmail.com', 'Your Name');
            $mail->addAddress('phamanhhoaipl@gmail.com', 'Admin');

            $mail->isHTML(true);
            $mail->Subject = 'Contact List from Website';  // Sử dụng ký tự tiếng Anh
             // Check if there are contacts
             if (empty($contacts)) {
                $mail->Body = '<p>No contacts for today.</p>';
            } else {
                $mail->Body = '
                    <html>
                    <head>
                        <style>
                            /* Định dạng bảng */
                            table {
                                width: 100%;
                                border-collapse: collapse;
                            }
                            th, td {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            th {
                                background-color: #f2f2f2;
                            }
                
                            /* Định dạng thông tin liên hệ */
                            .contact-info {
                                font-weight: bold;
                            }
                        </style>
                    </head>
                    <body>
                        <p>Contact List:</p>';
    
                foreach ($contacts as $contact) {
                    // Thêm thông tin từ bảng contact vào nội dung email
                    $mail->Body .= '
                    <table>
                    <tr>
                        <th colspan="2">Contact Information</th>
                    </tr>
                    <tr>
                        <td><span class="contact-info">ID:</span></td>
                        <td>' . $contact['contact_id'] . '</td>
                    </tr>
                    <tr>
                        <td><span class="contact-info">Name:</span></td>
                        <td>' . $contact['contact_name'] . '</td>
                    </tr>
                    <tr>
                        <td><span class="contact-info">Email:</span></td>
                        <td>' . $contact['contact_email'] . '</td>
                    </tr>
                    <tr>
                        <td><span class="contact-info">Phone:</span></td>
                        <td>' . $contact['contact_phone'] . '</td>
                    </tr>
                    <tr>
                        <td><span class="contact-info">Date:</span></td>
                        <td>' . $contact['contact_date'] . '</td>
                    </tr>
                    <tr>
                        <td><span class="contact-info">Content:</span></td>
                        <td>' . $contact['contact_content'] . '</td>
                    </tr>
                    <tr>
                        <td><span class="contact-info">Subject:</span></td>
                        <td>' . $contact['contact_subject'] . '</td>
                    </tr>
                </table>';
                }
    
                $mail->Body .= '
                    </body>
                    </html>';
            }
        
        $mail->Body .= '
            </body>
            </html>';
        
            

            // Gửi email
            $mail->send();
            echo "Message sent to Admin\n";
            header('Location: /thankpage'); // Replace '/' with the desired URL
            
            // Return success message or handle success as needed
            return "Email sent successfully!";
        } catch (Exception $e) {
            // Handle exception or return error message
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
  
    
}

