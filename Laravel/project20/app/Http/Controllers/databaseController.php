<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    //

    public function getData(){
        //return "OK";
        //return DB::table("students")->get();
        //return DB::table("students")->where("id", 5)->get();
        //return DB::table("students")->find(2);
        //return (array)DB::table("students")->find(2);
        //return DB::table("students")->count();

        /*return DB::table("students")->insert([
            // DB field Name -> new value
            "fname" => "Sujal",
            "lname" => "Khachariya",
            "email" => "Sujal@gmail.com",
            "phone" => "1234567890",
            "city" => "Rajkot",
            "country" => "india",
            "gender" => "male"
        ]);*/

        /*return DB::table("students")
        ->where("id", 2)
        ->update([
            // DB field Name -> new value
            "fname" => "Sujal",
            "lname" => "Khachariya",
            "email" => "Sujal@gmail.com",
            "phone" => "1234567890",
            "city" => "Rajkot",
            "country" => "india",
            "gender" => "male"
        ]);*/

        //return DB::table("students")->where("id", ">=", 10)->delete();

        //return DB::table("attendances")->max("absents");
        //return DB::table("attendances")->min("absents");
        //return DB::table("attendances")->sum("absents");
        //return DB::table("attendances")->count("absents");
        //return DB::table("attendances")->avg("absents");

        /*
            JOIN Query
        */

        //return DB::table("students")->get();

        //return DB::table("students")->join("attendances", "students.id", "=", "attendances.student_id")->get();

        //return DB::table("students")->join("attendances", "students.id", "=", "attendances.student_id")->join("marks", "students.id", "=", "marks.student_id")->get();

        /*
            Traditionl query
            SELECT students.id, students.fname, students.lname, students.email, students.phone, students.city, students.country, students.gender, attendances.absents, attendances.presents, marks.total, marks.result from students INNER join attendances on students.id = attendances.student_id inner JOIN marks on students.id = marks.student_id 
        */

        //return DB::table("students")->join("attendances", "students.id", "=", "attendances.student_id")->join("marks", "students.id", "=", "marks.student_id")->select(["students.id", "students.fname", "students.lname", "marks.total", "marks.result", "attendances.absents", "attendances.presents"])->get();

        //return DB::table("students")->join("attendances", "students.id", "=", "attendances.student_id")->join("marks", "students.id", "=", "marks.student_id")->select(["students.id", "students.fname", "students.lname", "marks.total", "marks.result", "attendances.absents", "attendances.presents"])->where("students.id", "=", "1")->get();
    }
}

