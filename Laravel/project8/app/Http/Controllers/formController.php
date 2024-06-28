<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function getProcess(Request $request){
        //echo "Get Method Called";
        //return $request->input();
        //return $request->input("fname")." ".$request->input("lname");
        $response = [
            "status" => 200,
            "method" => "GET",
            "fname" => $request->input("fname"),
            "lname" => $request->input("lname"), 
        ];

        //return $response;

        return view("greetings", ["response" => $response]);
    }

    public function postProcess(Request $request){
        //echo "Post Method Called";
        //return $request->input();
        //return $request->input("fname")." ".$request->input("lname");
        $response = [
            "status" => 200,
            "method" => "POST",
            "fname" => $request->input("fname"),
            "lname" => $request->input("lname"), 
        ];

        //return $response;

        return view("greetings", ["response" => $response]);
    }

    public function uploadProcess(Request $request){
        //return $request->file("file1");
        //return $request->file("file1")->store();
        //return $request->file("file1")->store("images");
        //return $request->file("file1")->storeAs("images/img1.jpg");
        //return $request->file("file1")->storeAs("images/".$request->file("file1")->getClientOriginalName());

        $filename = rand(9999, 99999)." ".$request->file("file1")->getClientOriginalName();

        return $request->file("file1")->storeAs("images/$filename");
    }
}
