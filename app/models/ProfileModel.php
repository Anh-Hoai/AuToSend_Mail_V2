<?php
namespace App\models;

use App\models\BaseModel;

class ProfileModel extends BaseModel
{
 public function logout(){
    session_unset();
    session_destroy();
    header("Location: /");
 }
 public function logoutadmin(){
   session_unset();
   session_destroy();
   header("Location: /loginadmin");
}
public function updateprofileadmin($date, $address,$id_users,$avatar){
   $update = $this->update('users', ['date' => $date, 'address' => $address,'img' => $avatar], 'id', $id_users);
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

}