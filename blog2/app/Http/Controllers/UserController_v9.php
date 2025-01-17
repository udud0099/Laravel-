<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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

    // v10 view check if view exit or not
    function v9advinLogin(){
        if(View::exists('v9_admin.v9_login')){

            return view('v9_admin.v9_login');
        } else{
            echo "no page found";
        }

    }
    function v11_Blade(){
        $name = "Sita Ram";
        $users = ["hari", "Sita", "Gita"];
        return view('v11_Blade', ['name' => $name, 'users' => $users]);
    }

    // v14 input
    function v14_addUser(Request $req){
        // echo "user name is $req->name";
        // echo "<br>";
        // echo $req-> email  ;
        // echo "<br>";
        // echo $req-> city  ;
        // echo "<br>";
        return $req;
    }
}
