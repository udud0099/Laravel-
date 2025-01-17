<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\UserController_v9;

Route::get('/', function () {
    return view('welcome');
});

// v8
// first /home is which url to open in website
// second 'v8_routes_home' is our file name
// Route::get('/home', function () {
//     return view('home');
// });
Route::view('/v8_routes_home', 'v8_routes_home');

// passing dinamik data from route
Route::get('/v8_routes_about/{name}', function ($name) {
    return view('v8_routes_about',['name'=>$name]);
});
// redirect path. if i want to go one page it send another page. if i want ot go profile page with out login it send home page
Route::redirect('/v8_routes_login', "/v8_routes_home");


// v9
Route::get("getUser_v9_controller",[UserController_v9::class, "getUser_v9_controller"]);
// Route::get("url name",[UserController_v9::class, "function name"]);
Route::get("about_User_v9_controller",[UserController_v9::class, "about_User_v9_controller"]);
Route::get("get_user_dynamic_name__v9_controller/{name}",[UserController_v9::class, "get_user_dynamic_name__v9_controller"]);
Route::get("v9advinLogin",[UserController_v9::class, "v9advinLogin"]);


// v11
Route::get("v11_Blade",[UserController_v9::class, "v11_Blade"]);

 
