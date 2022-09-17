<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function books(){
       $user = User::$globalData;
       return $user;
    }
}
//   php artisan make:controller TestController
