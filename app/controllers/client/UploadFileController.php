<?php
namespace App\controllers\client;

use App\controllers\BaseController;

class UploadfileController extends BaseController
{
    public function __construct()
    {
        
    }

    public function index()
    {
        parent::view('MasterLayout',['pages'=>'UploadFilePage']);
        
    }
    public function upload(){
        $oldName = $_FILES['receipt']['name'];
        echo ' ' . $oldName . '<br>';
        
        $fileExtension = pathinfo($oldName, PATHINFO_EXTENSION);
        $newName = date('YmdHis') . '.' . $fileExtension;
        
        
}

    
 
}