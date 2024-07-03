<?php

use App\Http\Controllers\httpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/viewdata", [httpController::class, "viewData"]);
