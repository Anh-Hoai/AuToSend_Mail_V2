<?php
namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\ProfileModel;

class ProfileClientController extends BaseController
{
    private $ProfileModel;
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
    }
    public function index()
    {
     
        parent::view('MasterLayout', ['pages' => 'ProfileClientPage']);
    }
    public function logout()
    {
    
            $this->ProfileModel->logout();
    }

    
 
}