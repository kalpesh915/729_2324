<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    //

    public function signUp(Request $request){
        $validatedUser = validator::make($request->all(), [
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required"
        ]);

        if(!$validatedUser->fails()){
            $newUser = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password
            ]);

            return response([
                "code" => 200,
                "status" => true,
                "message" => "New User Created Successfully",
                "user" => $newUser
            ]);
        }else{
            return response([
                "code" => 401,
                "status" => false,
                "message" => "Validation Failed", 
                "errors" => $validatedUser->errors()
            ]);
        }
    }

    public function login(Request $request){
        $validatedUser = Validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required"
        ]);

        if(!$validatedUser->fails()){
            if(Auth::attempt(["email" => $request->email, "password" => $request->password])){
                $AuthenticatedUser = Auth::user();

                return response([
                    "code" => 200,
                    "status" => true,
                    "message" => "Login Successfully",
                    "authenticatedUser" => $AuthenticatedUser,
                    "token" => $AuthenticatedUser->createToken("API_TOKEN")->plainTextToken,
                    "tokenType" => "bearer"
                ]);
            }else{
                return response([
                    "code" => 401,
                    "status" => false,
                    "message" => "Invalid Username or Password", 
                ]);
            }
        }else{
            return response([
                "code" => 401,
                "status" => false,
                "message" => "Validation Failed", 
                "errors" => $validatedUser->errors()
            ]);
        }
    }

    public function logout(Request $request){
        $user = $request->user();
        $user->tokens()->delete();

        return response([
            "code" => 200,
            "status" => true,
            "message" => "Logout Successfully",
            "user" => $user
        ]);
    }
}
