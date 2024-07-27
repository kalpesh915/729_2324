<?php

use App\Http\Controllers\studentsController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::post("/signup", [UserAuthController::class, "signUp"]);
Route::post("/login", [UserAuthController::class, "login"]);
Route::post("/logout", [UserAuthController::class, "logout"])->middleware("auth:sanctum");
Route::apiResource("/students", studentsController::class)->middleware("auth:sanctum");