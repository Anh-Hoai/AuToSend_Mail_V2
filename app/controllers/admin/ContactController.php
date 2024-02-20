<?php
namespace App\controllers\admin;

use App\controllers\BaseController;
use App\models\ContactModel;

class ContactController extends BaseController
{
    private $ContactModel;

    public function __construct()
    {
        $this->ContactModel = new ContactModel();
    }
    public function index()
    {
        if(isset($_SESSION['id_users'])){
            $id=$_SESSION['id_users'];
            $main  = $this->ContactModel->getOne('users', 'id', $id);
            if ($main) {
                $users =['id' => $main];
            }
        }
        $listcontact  = $this->ContactModel->getAll('contact');


        // parent::view('AdminMasterLayout', ['pages' => 'ProductAdminPage', 'users' => $users,'list' => $list]);
        $this->view('AdminMasterLayout', [
            'pages' => 'ContactAdminPage',
            'users' => $users,
            'listcontact'=>$listcontact

        ]);
    }

    
  
   

}