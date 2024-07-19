<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class studentApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $studentsData = student::all();

        return response([
            "message" => "Students Data Found",
            "students" => $studentsData
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validationRules = [
            "fname" => "required",
            "lname" => "required",
            "city" => "required",
            "email" => "required|email|unique:students,email",
            "phone" => "required",
            "gender" => "required",
            "age" => "required|numeric|min:0|max:100",
        ];

        $validationResult = validator::make($request->all(), $validationRules);

        if (!$validationResult->fails()) {

            /*return response([
                "message" => "Validation Pass"
            ], 200);*/

            $student = new student();

            $student->fname = $request->fname;
            $student->lname = $request->lname;
            $student->city = $request->city;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->gender = $request->gender;
            $student->age = $request->age;
            $student->save();

            return response([
                "message" => "New Student Created in Database"
            ], 200);

        } else {
            /*return response([
              "message" => "Validation Failed"
            ], 400);*/

            return response([
                "message" => "Validation Failed",
                "errors" => $validationResult->errors()
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $studentData = student::find($id);

        if (!$studentData == null) {
            return response([
                "message" => "Students Data Found",
                "student" => $studentData
            ], 200);
        } else {
            return response([
                "message" => "No Student Found with $id ID"
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $studentData = student::find($id);

        if(!$studentData == null){
            $validationRules = [
                "fname" => "required",
                "lname" => "required",
                "city" => "required",
                "email" => "required|email|unique:students,email",
                "phone" => "required",
                "gender" => "required",
                "age" => "required|numeric|min:0|max:100",
            ];
    
            $validationResult = validator::make($request->all(), $validationRules);
    
            if (!$validationResult->fails()) {
                $studentData->fname = $request->fname;
                $studentData->lname = $request->lname;
                $studentData->city = $request->city;
                $studentData->email = $request->email;
                $studentData->phone = $request->phone;
                $studentData->gender = $request->gender;
                $studentData->age = $request->age;
                $studentData->save();

                return response([
                    "message" => "Student data updated"
                ], 200);
            }else{
                return response([
                    "message" => "Validation Failed",
                    "errors" => $validationResult->errors()
                ], 400);
            }
    
        }else{
            return response([
                "message" => "No Student Data Found on $id id"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $studentData = student::find($id);

        if (!$studentData == null) {
            $studentData->delete();
            return response([
                "message" => "Students Data Deleted with $id id",
                "student" => $studentData
            ], 200);
        } else {
            return response([
                "message" => "No Student Found for delete with $id ID"
            ], 404);
        }
    }
}
