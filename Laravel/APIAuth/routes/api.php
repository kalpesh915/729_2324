<?php

use App\Http\Controllers\studentsController;
use App\Http\Controllers\usertAuthentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::post("/signup", [usertAuthentication::class, "signUp"]);
Route::post("/login", [usertAuthentication::class, "login"]);
Route::post("/logout", [usertAuthentication::class, "logOut"])->middleware('auth:sanctum');


Route::apiResource("/students", studentsController::class)->middleware('auth:sanctum');

