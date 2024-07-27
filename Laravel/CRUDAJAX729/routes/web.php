<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});


Route::get('/home', function () {
    return view('home');
});