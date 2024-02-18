<?php
namespace App\controllers\client;

use App\controllers\BaseController;
use App\models\ContactModel;

class ContactClientController extends BaseController
{
    private $ContactModel;
    public function __construct()
    {
        parent::model('ContactModel');
        $this->ContactModel = new ContactModel();
        parent::view('ClientMasterLayout', ['pages' => 'ContactClientPage']);
    }
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['c_email'];
            $phone = $_POST['c_phone'];
            $subject = $_POST['c_subject'];
            $content = $_POST['c_message'];
            $date = date('h:i:s A d/m/Y');
            $this->ContactModel->insert('contact',[
                'contact_name' => $name,
                'contact_email'=> $email,
                'contact_phone'=> $phone,
                'contact_date' => $date,
                'contact_content' => $content,
                'contact_subject' => $subject
            ]);
       

        }
     
    }

 
}