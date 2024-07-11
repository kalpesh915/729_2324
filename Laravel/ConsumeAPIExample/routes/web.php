<?php

use App\Http\Controllers\APIController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/listproducts", [APIController::class, "listProducts"]);
Route::get("/viewproduct/{pid?}", [APIController::class, "viewProduct"]);
