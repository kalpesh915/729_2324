<?php

use App\Http\Controllers\demoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function(){
    return view("about");
});

// old method
// Route::get("/method1", [demoController::class, "method1"]);
// Route::get("/method2", [demoController::class, "method2"]);
// Route::get("/method3", [demoController::class, "method3"]);

// new method
Route::controller(demoController::class)->group(function(){
    Route::get("/method1", "method1");
    Route::get("/method2", "method2");
    Route::get("/method3", "method3");
    Route::get("/method4", "method4");
});
