<?php

use App\Http\Controllers\studentApi;
use App\Http\Controllers\studentApi1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource("/students", studentApi::class);
Route::resource("/students1", studentApi1::class);
