<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

/*Route::get("/contact", function(){
    return view("contact");
});*/

Route::view("/contact", "contact");

/*Route::get("/student/{id}", function(int $id){
    return view("student", ["id"=>$id]);
});*/

/*Route::get("/student/{id}", function(string $id){
    return view("student", ["id"=>$id]);
});*/

/*Route::get("/student/{id?}", function(string $id="Not Available"){
    return view("student", ["id"=>$id]);
});*/

/*Route::get("/student/{id}", function(int $id){
    return view("student", ["id"=>$id]);
})->whereNumber("id");*/

/*Route::get("/student/{id}", function(string $id){
    return view("student", ["id"=>$id]);
})->whereAlpha("id");*/

/*Route::get("/student/{id}", function(string $id){
    return view("student", ["id"=>$id]);
})->whereAlphaNumeric("id");*/

/*Route::get("/student/{id}", function(string $id){
    return view("student", ["id"=>$id]);
})->where("id", "[a-z0-9]+");*/


// 127.0.0.1:8000/student/1/udit/GHETIYA
Route::get("/student/{id}/{fname}/{lname}", function(string $id, string $fname, string $lname){
    return view("student", ["id"=>$id, "fname"=>$fname, "lname"=>$lname]);
})->where("id", "[0-9]+")->where("fname", "[a-z]+")->where("lname", "[A-Z]+");


Route::get("/about-us", function(){
    return view("about");
})->name("about");


/*Route::get("/pages/home", function(){
    return view("home");
});
Route::get("/pages/contact", function(){
    return view("contact");
});
Route::get("/pages/login", function(){
    return view("login");
});*/

Route::prefix("/pages")->group(function(){
    Route::get("/home", function(){
        return view("home");
    });
    Route::get("/contact", function(){
        return view("contact");
    });
    Route::get("/login", function(){
        return view("login");
    });
});