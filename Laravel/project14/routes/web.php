<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getform', function () {
    return view('getform');
});

Route::get('/postform', function () {
    return view('postform');
});

Route::get('/putform', function () {
    return view('putform');
});

Route::get('/patchform', function () {
    return view('patchform');
});

Route::get('/deleteform', function () {
    return view('deleteform');
});

Route::get('/sessionform', function () {
    return view('sessionform');
});

Route::get('/greetings', function () {
    return view('greetings');
});

Route::get("/getprocess", [formController::class, "getProcess"]);
Route::post("/postprocess", [formController::class, "postProcess"]);
Route::put("/putprocess", [formController::class, "putProcess"]);
Route::patch("/patchprocess", [formController::class, "patchProcess"]);
Route::delete("/deleteprocess", [formController::class, "deleteProcess"]);
Route::post("/flashprocess", [formController::class, "flashProcess"]);