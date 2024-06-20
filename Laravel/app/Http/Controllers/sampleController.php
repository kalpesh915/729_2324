<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleController extends Controller
{
    //
    public function getData(){
        // return static HTML code
        echo "<h1>Welcome to Controllers of PHP MVC</h1>";
    }

    public function getAbout(){
        return view("about");
    }

    public function getAbout1(){
        return redirect("/getdata");
    }

    public function getAbout2($fname){
        //echo "Welcome {$fname}";
        return view("about", ["fname" => $fname]);
    }

    public function process1(Request $request){
        //echo "Process1 Called";
        //return $request->input();
        echo "Welcome {$request->input('fname')} {$request->input('lname')}";
    }

    public function process2(Request $request){
        //echo "Process1 Called";
        return $request->input();
        //echo "Welcome {$request->input('fname')} {$request->input('lname')}";
    }
}
