<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::post("/signup", [UserAuthController::class, "signUp"]);
Route::post("/login", [UserAuthController::class, "login"]);