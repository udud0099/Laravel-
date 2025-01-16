<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        // return " GetHari kumar";
        return view('v9-Controller-user');
    }

    function aboutUser(){
        return "about Hari kumar";
    }

    function getUserName($name){
        // return "about Hari kumar ".$name;
        return view('v9-Controller-getUserName',['name'=>$name]);
    }
    function adminLogin(){
        return view('v9-Controller-admin.v9-Controller-login');
    }
}
