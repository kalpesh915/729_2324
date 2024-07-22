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
        return response([
            "status" => true,
            "message" => "Students Data",
            "students" => student::all()
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
            "phone" => "required|numeric|digits:10",
            "gender" => "required|in:male,female",
            "age" => "required|numeric|max:100|min:0",
        ];

        $validationResult = validator::make($request->all(), $validationRules);

        if (!$validationResult->fails()) {
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
                "message" => "New Student Created"
            ], 200);
        } else {
            return response([
                "message" => "Validation Failed",
                "errors" => $validationResult->errors()
            ], 202);
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
                "message" => "Student Data Found",
                "student" => $studentData
            ], 200);
        } else {
            return response([
                "message" => "No Students Data with $id ID",
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
        if (!$studentData == null) {
            $validationRules = [
                "fname" => "required",
                "lname" => "required",
                "city" => "required",
                "email" => "required|email|unique:students,email",
                "phone" => "required|numeric|digits:10",
                "gender" => "required|in:male,female",
                "age" => "required|numeric|max:100|min:0",
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
                    "message" => "Student Updated with $id ID"
                ], 200);
            } else {
                return response([
                    "message" => "Validation Failed",
                    "errors" => $validationResult->errors()
                ], 202);
            }
        } else {
            return response([
                "message" => "No Students Data found for Update with $id ID",
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
                "message" => "Student Data Deleted With $id ID",
            ], 200);
        } else {
            return response([
                "message" => "No Students Data found for Delete with $id ID",
            ], 404);
        }
    }
}
