<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::view('/home', 'home');

Route::redirect('/',"/home");

Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});
// v9 Controller
Route::get('getUser',[UserController::class, 'getUser']);
Route::get('aboutUser',[UserController::class, 'aboutUser']);
Route::get('getUserName/{name}',[UserController::class, 'getUserName' ]);
Route::get('getUserName/{name}',[UserController::class, 'getUserName' ]);
Route::get('v9-Controller-admin-login',[UserController::class, 'adminLogin']);
