<?php

namespace App;

use App\core\Route;
use App\controllers\client\HomeClientController as HomeClientController;
use App\controllers\client\AboutClientController as AboutClientController;
use App\controllers\client\ContactClientController as ContactClientController;
use App\controllers\client\ShopClientController as ShopClientController;
use App\controllers\client\AutoSendController as AutoSendController;
use App\controllers\client\LoginClientController as LoginClientController;
use App\controllers\client\ProfileClientController as ProfileClientController;
use App\controllers\client\UpdateProfileController as UpdateProfileController;
use App\controllers\client\ForgotController as ForgotController;
use App\controllers\client\ResetPasswordController as ResetPasswordController;
use App\controllers\client\UploadfileController as UploadfileController;
use App\controllers\client\SigninClientController as SigninClientController;
use App\controllers\client\ShopsingerClientController as ShopsingerClientController;


use App\controllers\client\ThankController as ThankController;


use App\controllers\admin\HomeController as HomeAdminController;
use App\controllers\admin\LoginAdminController as LoginAdminController;
use App\controllers\admin\ProfileAdminController as ProfileAdminController;
use App\controllers\admin\UpdateProfileAdminController as UpdateProfileAdminController;
use App\controllers\admin\UserAdminController as UserAdminController;
use App\controllers\admin\ProductAdminController as ProductAdminController;
use App\controllers\admin\CategoryController as CategoryController;






class routes
{
    public function __construct()
    {
        $route = new Route;
        $route
            ->get('', [HomeClientController::class, 'index'])
            ->get('/about', [AboutClientController::class, 'index'])
            ->get('/shop', [ShopClientController::class, 'index'])
            ->get('/shopsinger', [ShopsingerClientController::class, 'index'])
            
            ->get('/contact', [ContactClientController::class, 'index'])
            ->post('/contact', [ContactClientController::class, 'index'])
            ->get('/loginclient', [LoginClientController::class, 'index'])
            ->post('/loginclient', [LoginClientController::class, 'index'])
            ->get('/signinclient', [SigninClientController::class, 'index'])
            ->post('/signinclient', [SigninClientController::class, 'index'])

            ->get('/profileclient', [ProfileClientController::class, 'index'])

            ->get('/logout', [ProfileClientController::class, 'logout'])
            ->post('/logout', [ForgotController::class, 'index'])
            ->get('/updateprofile', [UpdateProfileController::class, 'index'])

            ->get('/forgot', [ForgotController::class, 'index'])
            ->post('/forgot', [ForgotController::class, 'index'])

            ->get('/resetpassword', [ResetPasswordController::class, 'index'])
            ->post('/resetpassword', [ResetPasswordController::class, 'index'])


            ->get('/thankpage', [ThankController::class, 'index'])

            ->get('/admin', [HomeAdminController::class, 'index'])
            ->get('/loginadmin', [LoginAdminController::class, 'index'])
            ->post('/loginadmin', [LoginAdminController::class, 'index'])

            ->get('/profileadmin', [ProfileAdminController::class, 'index'])
            ->get('/logoutadmin', [ProfileAdminController::class, 'logout'])
            ->get('/updateprofileadmin', [UpdateProfileAdminController::class, 'index'])
            ->post('/updateprofileadmin', [UpdateProfileAdminController::class, 'index'])
            //User Admin          
            ->get('/useradmin', [UserAdminController::class, 'index'])

            ->get('/autosend', [AutoSendController::class, 'index'])
            //Product Admin 
            ->get('/product/list', [ProductAdminController::class, 'index'])
            ->get('/product/add', [ProductAdminController::class, 'CreateProduct'])
            ->post('/product/add', [ProductAdminController::class, 'CreateProduct'])
            ->get('/product/update', [ProductAdminController::class, 'UpdateProduct'])
            ->post('/product/update', [ProductAdminController::class, 'UpdateProduct'])
            ->get('/deleteproduct', [ProductAdminController::class, 'DeleteProduct'])

            ->get('/category/list', [CategoryController::class, 'index'])
            ->get('/categorydelete', [CategoryController::class, 'DeleteCategory'])
            ->get('/category/add', [CategoryController::class, 'CreatedCategory'])
            ->post('/category/add', [CategoryController::class, 'CreatedCategory'])
            ->get('/category/edit', [CategoryController::class, 'UpdateProduct'])
            ->post('/category/edit', [CategoryController::class, 'UpdateProduct']);




        try {
            $route->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
        } catch (\Exception $e) {
            // Handle exceptions here
            echo "Error" . $e->getMessage();
        }
    }
}