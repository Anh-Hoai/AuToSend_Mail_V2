<?php
namespace App\controllers\admin;

use App\controllers\BaseController;
use App\models\ProfileModel;

class HomeController extends BaseController
{
    private $ProfileModel;

    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
    }
    public function index()
    {
        if (!isset($_SESSION['usersname'])) {
            header('Location: /loginadmin');

        }
        if (isset($_SESSION['id_users'])) {
            $id = $_SESSION['id_users'];
            $main = $this->ProfileModel->getOne('users', 'id', $id);
            if ($main) {
                $users = ['id' => $main];
            }
        }
        // Gọi hàm getAll từ ProfileModel
        $listContact = $this->ProfileModel->getAll('contact');



        parent::view('AdminMasterLayout', ['pages' => 'AdminPage', 'users' => $users, 'contact' => $listContact]);
    }
}