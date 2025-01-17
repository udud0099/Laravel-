<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController_v9 extends Controller
{
    //
    function getUser_v9_controller(){
        // return "v9 Hari Kumar shaha";
        return view('v9_user');
    }
    function about_User_v9_controller(){
        return "v9 about_User_v9_controller Hari Kumar shaha";
    }
    function get_user_dynamic_name__v9_controller($name){
        // return "v9 get_user_dynamic_name__v9_controller Hari Kumar shaha ".$name;
        return view('get_user_dynamic_name__v9_controller',['name'=>$name]);
    }
    function v9advinLogin(){
        return view('v9_admin.v9_login');
    }
}
