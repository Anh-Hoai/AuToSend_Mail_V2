<?php
namespace App\models;

use PDOException;
use App\models\BaseModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PDO;

// Include the Composer autoload file
require 'vendor/autoload.php';
class ProductClientModel extends BaseModel
{
    public function CreateProduct($product_name, $product_price, $product_qty, $product_title, $avatar, $date_create,$category_id)
    {
        if (isset($product_name)) {
            $insert = $this->insert('sanpham', [
                'product_name' => $product_name,
                'product_price' => $product_price,
                'product_qty' => $product_qty,
                'product_title' => $product_title,
                'product_img' => $avatar,
                'product_created' => $date_create,
                'category_id'=>$category_id
            ]);
    
            if ($insert) {
                // If insert is successful, send success message and redirect
                echo 'Product created successfully.';
                header("Location: /product/list");
                exit(); // Make sure to exit after redirect
            } else {
                // If insert fails, display error message
                echo 'Error creating product.';
            }
        }
    }
    public function UpdateProduct($product_id,$product_name, $product_price, $product_qty, $product_title, $avatar,$category_id)
    {
        if (isset($product_id)) {
            $update = $this->update('sanpham', ['product_name' => $product_name, 'product_price' => $product_price,'product_qty' => $product_qty,'product_title' => $product_title,'product_img' => $avatar,'category_id' =>$category_id], 'product_id', $product_id);
    
            if ($update) {
                // If insert is successful, send success message and redirect
                echo 'Product update successfully.';
                header("Location: /product/list");
                exit(); // Make sure to exit after redirect
            } else {
                // If insert fails, display error message
                header("Location: /admin");

            }
        }
    }
    
 

}


