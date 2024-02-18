<?php
require "vendor/autoload.php";
require "./config/config.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
use App\routes;
$routes = new routes();
