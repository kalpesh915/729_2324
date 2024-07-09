<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post("/addprocess", [formController::class, "addProcess"]);
Route::get("/liststudents", [formController::class, "listStudents"]);
Route::get("/deletestudent/{id?}", [formController::class, "deleteStudent"]);
Route::get("/updatedata/{id?}", [formController::class, "updateData"]);
Route::post("/updateprocess", [formController::class, "updateProcess"]);

