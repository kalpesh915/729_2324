<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('home');
});*/

Route::view("/", "home");

Route::get("/about", function(){
    return view("about");
});

Route::get("/feedback", function(){
    return view("feedback");
});

Route::get("/contact", function(){
    return view("contact");
});

/*Route::get("/products", function(){
    return view("products");
});*/

/*Route::get("/products/{pid}", function($pid){
    //echo "P ID is {{$pid}}";
    return view("products", ["pid" => $pid]);
});*/

// pid is optional parameter for route
/*Route::get("/products/{pid?}", function($pid = "Not Available"){
    //echo "P ID is {{$pid}}";
    return view("products", ["pid" => $pid]);
});*/

/*Route::get("/products/{pid}", function($pid){
    //echo "P ID is {{$pid}}";
    return view("products", ["pid" => $pid]);
})->whereNumber("pid");*/

/*Route::get("/products/{pid}", function($pid){
    //echo "P ID is {{$pid}}";
    return view("products", ["pid" => $pid]);
})->whereAlpha("pid");*/

/*Route::get("/products/{pid}", function($pid){
    //echo "P ID is {{$pid}}";
    return view("products", ["pid" => $pid]);
})->whereAlphaNumeric("pid");*/

/*Route::get("/products/{pid}", function($pid){
    //echo "P ID is {{$pid}}";
    return view("products", ["pid" => $pid]);
})->whereIn("pid", [12, 13, 15]);*/

/*Route::get("/products/{cid}/{pid}", function($cid, $pid){
    //echo "P ID is {{$pid}}";
    return view("products", ["cid" => $cid, "pid" => $pid]);
});*/

Route::get("/admin-login-page", function(){
    return view("adminlogin");
})->name("adminlogin");


/*Route::get("/news/local", function(){
    //return view("news/local");
    return view("news.local");
});

Route::get("/news/sport", function(){
    return view("news.sport");
});

Route::get("/news/international", function(){
    return view("news.international");
});*/

Route::prefix("/news")->group(function(){
    Route::get("/local", function(){
        return view("news.local");
    });
    Route::get("/sport", function(){
        return view("news.sport");
    });
    Route::get("/international", function(){
        return view("news.international");
    });

    Route::get("/topnews", function(){
        return redirect("/");
    });
});