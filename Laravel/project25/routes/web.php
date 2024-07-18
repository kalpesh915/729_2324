<?php

use App\Http\Controllers\studentController;
use App\Models\student;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/stringdemo", function(){
    $str1 = "welcome to world of PHP Laravel with VSCode";
    echo "<hr>".$str1;
    echo "<hr>".Str::ucfirst($str1);
    echo "<hr>".Str::upper($str1);
    echo "<hr>".Str::lower($str1);
    echo "<hr>".Str::camel($str1);
    echo "<hr>".Str::replaceFirst('to', 'TO', $str1);
    echo "<hr>".Str::of($str1)->ucfirst()->replaceFirst("o", "O");
    echo "<hr>".Str::before($str1, "of");
    echo "<hr>".Str::after($str1, "of");
    echo "<hr>".Str::repeat($str1, 2);
    echo "<hr>".Str::words($str1, 5);
    echo "<hr>".Str::between($str1, "to", "with");
    echo "<hr>".Str::contains($str1, "of");
    echo "<hr>".Str::startsWith($str1, "welcome");
    echo "<hr>".var_dump(Str::startsWith($str1, "Welcome"));
    echo "<hr>".Str::endsWith($str1, "VSCode");
});

// Route::get("/routemodel/{id}", [studentController::class, "findStudent"]);

Route::get("/routemodel/{id}", function(student $id){
    return $id;
});