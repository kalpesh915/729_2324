<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/getdemo', function () {
    return view('getform');
});

Route::get('/postdemo', function () {
    return view('postform');
});

Route::get('/uploaddemo', function () {
    return view('uploadform');
});


// controller code
Route::get("/getprocess", [formController::class, "getProcess"]);
Route::post("/postprocess", [formController::class, "postProcess"]);
Route::post("/uploadprocess", [formController::class, "uploadProcess"]);

