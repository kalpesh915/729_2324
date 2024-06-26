<?php

use App\Http\Controllers\bladeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/example", [bladeController::class, "index"] );
