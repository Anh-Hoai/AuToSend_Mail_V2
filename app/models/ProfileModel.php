<?php
namespace App\models;

use App\models\BaseModel;

class ProfileModel extends BaseModel
{
    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location: /");
    }
    public function logoutadmin()
    {
        session_unset();
        session_destroy();
        header("Location: /loginadmin");
    }
    public function updateprofileadmin($date, $address, $id_users, $avatar)
    {
        $update = $this->update('users', ['date' => $date, 'address' => $address, 'img' => $avatar], 'id', $id_users);
        if ($update) {
            // If update is successful, send email
            header("Location: /profileadmin");

        } else {
            // If update fails
            echo 'Error updating.';
        }
    }
    public function GetUserId()
    {
        $id = $_SESSION['id_users'];
        try {
            $user = $this->getOne('users', 'id', $id);
        } catch (\Exception $e) {
            // Handle any exceptions that may occur
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function GetImgOld()
    {
        $id = $_SESSION['id_users'];
        try {
            $user = $this->getOne('users', 'id', $id);
            if ($user) {
                $avatar = $user['img']; // Assuming the column name is 'avatar'
                return $avatar;
            } else {
                // Log or echo an error message for debugging
                echo 'User not found.';
            }
        } catch (\Exception $e) {
            // Log or echo the exception message for debugging
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function updateprofileuser($date, $address, $id_users, $avatar)
    {
        $user = $this->getOne('users', 'id', $id_users);
        if ($user && $user['role_id'] == 0) {
            $update = $this->update('users', ['date' => $date, 'address' => $address, 'img' => $avatar], 'id', $id_users);
            if ($update) {
                // If update is successful, send email
                header("Location: /");

            } else {
                // If update fails
                echo 'Error updating.';
            }
        }


    }

}