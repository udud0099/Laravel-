<?php

use Illuminate\Support\Facades\Route; 

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

 
