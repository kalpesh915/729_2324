<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware("securelogin")->group(function(){
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/services', function () {
        return view('services');
    });
    Route::get('/products', function () {
        return view('products');
    });
    Route::get('/feedback', function () {
        return view('feedback');
    });
    Route::get('/contact', function () {
        return view('contact');
    });    
    Route::get("/logout", function(){
        if(session("username")){
            session()->flush("username");
            session()->flash("success", "Logout successfully");
            return view("/login");
        }else{
            session()->flash("success", "Invalid Logout Attempt");
            return view("/login");
        }
    });
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/errorpage', function () {
    return view('errorpage');
});
Route::fallback(function(){
    return view("errorpage");
});

Route::post("/loginprocess", [loginController::class, "loginProcess"]);
