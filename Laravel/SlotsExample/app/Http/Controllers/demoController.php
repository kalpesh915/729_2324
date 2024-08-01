<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class demoController extends Controller
{
    //
    public function method1(){
        return "<h1>This is Method 1</h1>";
    }

    public function method2(){
        return "<h1>This is Method 2</h1>";
    }

    public function method3(){
        return "<h1>This is Method 3</h1>";
    }

    public function method4(){
        $ip1 = 10;
        return Blade::render("<h1>This is Inline Blade File {{ $ip1 }}</h1", ["ip1" => $ip1]);
    }
}
