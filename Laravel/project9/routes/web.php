<?php

use App\Http\Middleware\routedmiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware(routedmiddleware::class);

/*Route::get('/about', function () {
    return view('about');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/contact', function () {
    return view('contact');
});*/

Route::middleware("checkAge")->group(function(){
    Route::get('/about', function () {
        return view('about');
    });
    
    Route::get('/feedback', function () {
        return view('feedback');
    });
    
    Route::get('/contact', function () {
        return view('contact');
    }); 
});

Route::get('/login', function () {
    return view('login');
});

Route::get("/errorpage", function(){
    return view("/errorpage");
});