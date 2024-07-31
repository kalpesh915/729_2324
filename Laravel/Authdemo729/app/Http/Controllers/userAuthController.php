<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userAuthController extends Controller
{
    //
    public function singupProcess(Request $request){
        $validatedUser = $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed"
        ]);

        $newUser = User::create($validatedUser);

        return redirect("/")->with("success", "New User Created with Email : ".$validatedUser["email"]);
    }

    public function loginProcess(Request $request){
        $validatedUser = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(Auth::attempt($validatedUser)){
            return redirect("/home");
        }else{
            return redirect("/")->with("error", "Invalid Username or Password");
        }
    }

    public function logoutProcess(Request $request){
        Auth::logout();
        return redirect("/")->with("success", "Logout Successfully");
    }
}
