<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class studentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $studentsData = student::all();
        return response([
            "code" => 200,
            "status" => true,
            "studentsdata" => $studentsData
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedUser = Validator::make($request->all(), [
            "fname" => "required",
            "lname" => "required",
            "city" => "required",
            "email" => "required|email|unique:students,email",
            "phone" => "required|numeric|digits:10",
            "gender" => "required|in:male,female",
            "age" => "required|numeric|min:0|max:100"
        ]);

        if(!$validatedUser->fails()){
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
                "code" => 200,
                "status" => true,
                "message" => "New Student Created",
                "student" => $student
            ]);

        }else{
            return response([
                "code" => 401,
                "status" => false,
                "message" => "Validations Failed",
                "errors" => $validatedUser->errors()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $studentData = student::find($id);

        if(!$studentData == null){
            return response([
                "code" => 200,
                "message" => "Student Data Found with $id ID",
                "studentdata" => $studentData
            ]);
        }else{
            return response([
                "code" => 401,
                "status" => false,
                "message" => "No Student Found on $id ID"
            ]);
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
            $validatedUser = Validator::make($request->all(), [
                "fname" => "required",
                "lname" => "required",
                "city" => "required",
                "email" => "required|email",
                "phone" => "required|numeric|digits:10",
                "gender" => "required|in:male,female",
                "age" => "required|numeric|min:0|max:100"
            ]);

            if(!$validatedUser->fails()){
                $studentData->fname = $request->fname;
                $studentData->lname = $request->lname;
                $studentData->city = $request->city;
                $studentData->email = $request->email;
                $studentData->phone = $request->phone;
                $studentData->gender = $request->gender;
                $studentData->age = $request->age;
                $studentData->save();
    
                return response([
                    "code" => 200,
                    "status" => true,
                    "message" => "Student Data Updated",
                    "student" => $studentData
                ]);
            }else{
                return response([
                    "code" => 401,
                    "status" => false,
                    "message" => "Validations Failed",
                    "errors" => $validatedUser->errors()
                ]);
            }
        }else{
            return response([
                "code" => 404,
                "status" => false,
                "message" => "No Student Found for Update on $id ID"
            ]);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $studentData = student::find($id);

        if(!$studentData == null){
            $studentData->delete();
            return response([
                "code" => 200,
                "status" => true,
                "message" => "Student Data Found and Deleted with $id ID"
            ]);
        }else{
            return response([
                "code" => 401,
                "status" => false,
                "message" => "No Student Found for Delete on $id ID"
            ]);
        }
    }
}
