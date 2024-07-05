<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class formController extends Controller
{
    //

    public function getProcess(Request $request){
        return $request->input();
    }

    public function postProcess(Request $request){
        return $request->input();
    }

    public function putProcess(Request $request){
        return $request->input();
    }

    public function patchProcess(Request $request){
        return $request->input();
    }

    public function deleteProcess(Request $request){
        return $request->input();
    }

    public function flashProcess(Request $request){
        //return $request->input();
        session()->flash("username", $request->input("fname"));
        return redirect("/greetings");
    }
}
