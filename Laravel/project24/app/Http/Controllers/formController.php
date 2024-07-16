<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function formProcess(Request $request){

        // server side validation
        $request->validate([
            "fname" => "required",
            "lname" => "required",
            "email" => "required|email",
            "phone" => "required",
            "age" => "required|numeric|max:100|min:0",
        ]);
        return $request->all();
    }
}
