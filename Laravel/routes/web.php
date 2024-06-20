<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\sampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/link1", [userController::class, "index"]);
Route::get("/getdata", [sampleController::class, "getData"]);
Route::get("/about", [sampleController::class, "getAbout"]);
Route::get("/about1", [sampleController::class, "getAbout1"]);
Route::get("/about2/{fname}", [sampleController::class, "getAbout2"]);
Route::view("/form1", "form1");
Route::view("/form2", "form2");
Route::get("/process1", [sampleController::class, "process1"]);
Route::post("/process2", [sampleController::class, "process2"]);