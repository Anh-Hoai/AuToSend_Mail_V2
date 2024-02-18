<?php

namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\AutoSendModel;

class AutoSendController extends BaseController
{
    private $AutoSendModel;

    public function __construct()
    {
        $this->AutoSendModel = new AutoSendModel();
    }

    public function index()
    {
        // Assuming the getAll method returns the result
        $contacts = $this->AutoSendModel->getAll('contact');

        // Assuming you have a method named contactsendmail in AutoSendModel
        $this->AutoSendModel->sendContactEmail($contacts);

       
    }
}
