<?php 
namespace App\core;
class RouteNotFound extends \Exception{
   
    public function __construct(){
    echo '404';
    }
}