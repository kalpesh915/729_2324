<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function listStudents(){
        //echo "Called";
        // select * from students
        $studentsData = student::all();
        //return $studentsData;
        return view("liststudent", ["studentsData" => $studentsData]);
    }

    public function listPagination(){
        // select * from students limit 10
        $studentsData = student::paginate(10);
        //return $studentsData;
        return view("pagestudent", ["studentsData" => $studentsData]);
    }
}
