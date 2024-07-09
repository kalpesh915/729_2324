<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/liststudents", [studentController::class, "listStudents"]);
Route::get("/listpagination", [studentController::class, "listPagination"]);
