<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{
    //
    public function index(){
        $username = "Adarsh Chavda";
        $students = ["1"=>"Udit", "2" => "Yagnik", "3" => "Yograjsing", "4" => "Bhalabhai", "5" => "Yash", "6" => "Adarsh", "7" => "Tushar"];
        return view("example", ["username" => $username, "students" => $students]);
    }
}
