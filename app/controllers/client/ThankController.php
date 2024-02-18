<?php
namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\LoginClientModel;

class ThankController extends BaseController
{
    private $LoginClientModel;
    public function __construct()
    {
        $this->LoginClientModel = new LoginClientModel();
    }
    public function index()
    {
   
        parent::view('MasterLayout', ['pages' => 'ThankPage']);
    }

}
