<?php

use App\Http\Controllers\userAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/singup', function () {
    return view('singup');
});

Route::post("/singupprocess", [userAuthController::class, "singupProcess"]);
Route::post("/loginprocess", [userAuthController::class, "loginProcess"]);
Route::get("/logout", [userAuthController::class, "logoutProcess"]);

Route::middleware("checkLogin")->group(function () {
    Route::view("/home", "home");
    Route::view("/about", "about");
    Route::view("/products", "products");
    Route::view("/services", "services");
    Route::view("/feedback", "feedback");
    Route::view("/contact", "contact");
});
