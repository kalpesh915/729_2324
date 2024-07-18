<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */

Route::post("/addnewstudent", [APIController::class, "store"]);
Route::get("/getallstudents", [APIController::class, "index"]);
Route::get("/getallstudents/{id}", [APIController::class, "show"]);
Route::put("/updatestudent/{id}", [APIController::class, "update"]);
Route::delete("/deletestudent/{id}", [APIController::class, "destroy"]);
