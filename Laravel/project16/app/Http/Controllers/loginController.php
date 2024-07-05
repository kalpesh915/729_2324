<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function loginProcess(Request $request){
        //return $request;
        if($request->input("email") === "admin@project.com" and $request->input("password") === "admin"){
            //return "ok";
            session()->put("username", $request->input("email"));
            return redirect("/");
        }else{
            session()->flash("error", "Invalid Username or Password");
            return redirect("/login");
        }
    }
}
