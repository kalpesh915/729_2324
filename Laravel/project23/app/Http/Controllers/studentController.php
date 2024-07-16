<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function accesorExample(){
        return student::all();
    }

    public function mutatorExample(){
        $student = new student();

        $student->fname = "Sujal";
        $student->lname = "Khachariya";
        $student->city = "rajkot";
        $student->email = "Sujal@gmail.com";
        $student->phone = "9988776655";      
        $student->gender = "male";
        $student->age = 22;

        $student->save();
    }

    public function one2oneExample(){
        return student::find(1)->getPhoto;
    }

    public function one2manyExample(){
        return student::find(5)->getFees;
    }
}
