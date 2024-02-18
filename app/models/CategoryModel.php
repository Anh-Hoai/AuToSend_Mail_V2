<?php
namespace App\models;

use PDOException;
use App\models\BaseModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PDO;

// Include the Composer autoload file
require 'vendor/autoload.php';
class CategoryModel extends BaseModel
{
    public function CreateCategory($category_name,$category_tilte)
    {
        if (isset($category_name)) {
            $insert = $this->insert('category', [
                'name' => $category_name,
                'title' => $category_tilte,
              
            ]);
    
            if ($insert) {
                // If insert is successful, send success message and redirect
                echo 'Product created successfully.';
                header("Location: /category/list");
                exit(); // Make sure to exit after redirect
            } else {
                // If insert fails, display error message
                echo 'Error creating category.';
            }
        }
    }
    public function UpdateCategory($category_id,$category_name,$category_tilte)
    {
        if (isset($category_id)) {
            $update = $this->update('category', ['name' => $category_name, 'title' => $category_tilte], 'id', $category_id);
    
            if ($update) {
                // If insert is successful, send success message and redirect
                echo 'Product update successfully.';
                header("Location: /category/list");
                exit(); // Make sure to exit after redirect
            } else {
                // If insert fails, display error message
                header("Location: /admin");

            }
        }
    }

    
 

}


