<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class usertAuthentication extends Controller
{
    //

    public function signUp(Request $request)
    {
        // user validations
        $usersValidation = validator::make($request->all(), [
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required"
        ]);

        if (!$usersValidation->fails()) {
            // create new users
            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password
            ]);

            return response()->json([
                "status" => true,
                "message" => "New User Created",
                "user" => $user
            ], 200);
        } else {
            // if validation fails
            return response()->json([
                "status" => false,
                "message" => "Invalid Form Data",
                "errors" => $usersValidation->errors()
            ], 401);
        }
    }

    public function login(Request $request)
    {
        // user validations
        $usersValidation = validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required"
        ]);

        if (!$usersValidation->fails()) {
            // token create for user
            if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
                $authenticatedUser = Auth::user();

                // remove old tokens 
                /*$user = $request->user();
                $user->tokens()->delete();*/

                // create reposnse Token

                return response()->json([
                    "status" => true,
                    "message" => "Login Success Fully",
                    "token" => $authenticatedUser->createToken("API-Token")->plainTextToken,
                    "authenticatedUser" => $authenticatedUser
                ], 200);
            } else {
                // if validation fails
                return response()->json([
                    "status" => false,
                    "message" => "Invalid Username or Password"
                ], 401);
            }
        } else {
            // if validation fails
            return response()->json([
                "status" => false,
                "message" => "Validation Failed",
                "errors" => $usersValidation->errors()
            ], 401);
        }
    }

    public function logOut(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();

        return response()->json([
            "status" => true,
            "message" => "Logout Successfully",
            "user" => $user
        ], 401);
    }
}
