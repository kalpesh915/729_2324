<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/accesor1", [studentController::class, "accesorExample"]);
Route::get("/mutator1", [studentController::class, "mutatorExample"]);
Route::get("/one2one", [studentController::class, "one2oneExample"]);
Route::get("/one2many", [studentController::class, "one2manyExample"]);
