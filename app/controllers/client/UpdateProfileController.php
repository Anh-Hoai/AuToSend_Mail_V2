<?php
namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\ProfileModel;

class UpdateProfileController extends BaseController
{
    private $ProfileModel;
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
    }
    public function index()
    {
     
        parent::view('MasterLayout', ['pages' => 'UpdateProfilePage']);
    }
  

    
 
}