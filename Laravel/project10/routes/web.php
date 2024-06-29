<?php

use App\Http\Middleware\errormiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/*Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});*/

Route::middleware("success")->group(function(){
    Route::get('/about', function () {
        return view('about');
    });
    
    Route::get('/products', function () {
        return view('products');
    });
    
    Route::get('/contact', function () {
        return view('contact');
    });
});

Route::get('/login', function () {
    return view('login');
})->middleware(errormiddleware::class);

Route::get('/errorpage', function () {
    return view('errorpage');
});

Route::get('/urldemo', function () {
    return view('urldemo');
});
