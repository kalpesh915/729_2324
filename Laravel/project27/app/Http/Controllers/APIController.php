<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // display all records
        $studentsData = student::all();

        return response([
            "students" => $studentsData
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validations

        $validationRules = [
            "fname" => "required|min:3|max:20",
            "lname" => "required|min:3|max:20",
            "city" => "required|min:3|max:20",
            "email" => "required|email",
            "phone" => "required",
            "gender" => "required",
            "age" => "required|numeric|min:0|max:100"];

        $validate = Validator::make($request->all(), $validationRules);

        if($validate->fails()){
            return $validate->errors();
        }else{
            return "Run Code";
        }

        // create new record
        $student = new student();

        $student->fname = $request->input("fname");
        $student->lname = $request->input("lname");
        $student->city = $request->input("city");
        $student->email = $request->input("email");
        $student->phone = $request->input("phone");
        $student->gender = $request->input("gender");
        $student->age = $request->input("age");

        $student->save();

        return response([
            "message" => "New Student Creted"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // display specific record
        $studentData = student::find($id);

        if(!$studentData == null){
            return response([
                "message" => "Student Found",
                "student" => $studentData
            ], 200);
        }else{
            return response([
                "message" => "No Student found with $id id"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return $request;

        // update update
        $studentData = student::find($id);

        //return $studentData;

        if(!$studentData == null){
            $studentData->fname = $request->fname;
            $studentData->lname = $request->lname;
            $studentData->city = $request->city;
            $studentData->email = $request->email;
            $studentData->phone = $request->phone;
            $studentData->gender = $request->gender;
            $studentData->age = $request->age;
            $studentData->save();

            return response([
                "message" => "Student Data Updated Successfully"
            ], 200);
        }else{
            return response([
                "message" => "No Student found with $id id"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete record
        $studentData = student::find($id);

        if(!$studentData == null){
            $studentData->delete();

            return response([
                "message" => "Data Deleted"
            ], 200);
        }else{
            return response([
                "message" => "No Student found with $id id"
            ], 404);
        }
    }
}
