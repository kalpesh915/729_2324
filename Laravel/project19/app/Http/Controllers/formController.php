<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function addProcess(Request $request){
        //return $request->input();

        $student = new student();

        $student->fname = $request->input("fname");
        $student->lname = $request->input("lname");
        $student->city = $request->input("city");
        $student->email = $request->input("email");
        $student->phone = $request->input("phone");
        $student->gender = $request->input("gender");
        $student->age = $request->input("age");

        $student->save();

        session()->flash("success", "New Student created in Database");
        return redirect("/");
    }

    public function listStudents(){
        $studentsList = student::paginate(5);
        return view("liststudents", ["studentsList" => $studentsList]);
    }

    public function deleteStudent($id=0){
        if($id == 0){
            session()->flash("error", "Unable to delete data");
        }
        //return "ID is $id";
        $studentData = student::find($id);
        //return $studentData;
        if(!empty($studentData)){
            $studentData->delete();
            session()->flash("success", "Data Deleted with $id ID");
        }else{
            session()->flash("error", "No Data found of $id ID");
        }
        return redirect("/liststudents");
    }

    public function updateData($id = 0){
        if($id == 0){
            session()->flash("error", "Unable to update data");
        }
        $studentData = student::find($id);

        if(!empty($studentData)){
            return view("updatestudent", ["studentData" => $studentData]);
        }else{
            session()->flash("error", "No Data found of $id ID");
            return redirect("/liststudents");
        }
    }

    public function updateProcess(Request $request){
        $student = student::find($request->input("id"));

        $student->fname = $request->input("fname");
        $student->lname = $request->input("lname");
        $student->city = $request->input("city");
        $student->email = $request->input("email");
        $student->phone = $request->input("phone");
        $student->gender = $request->input("gender");
        $student->age = $request->input("age");

        $student->save();

        session()->flash("success", "Student Updated in Database");
        return redirect("/liststudents");
    }
}
