<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    //

    public function getAllData(){
        //return DB::select("select * from students");

        /*return DB::statement(
            "update students set fname = 'udit' where roll > 20"
        );*/

        /*return DB::update(
            "update students set fname = 'Sujal' where fname = 'udit'"
        );*/

        /*return DB::update(
            "update students set fname = ? where fname = ?",
            ["Adarsh", "Sujal"]
        );*/

        /*return DB::insert(
            "insert into students (fname, lname, city, email, phone, gender) values ('Rana', 'Yograjsinh', 'Rajkot', 'yograjsinh@gmail.com', '9966332211', 'male')"
        );*/

        /*return DB::insert(
            "insert into students (fname, lname, city, email, phone, gender) values (?, ?, ?, ?, ?, ?)",
            ['Rana', 'Yograjsinh', 'Rajkot', 'yograjsinh@gmail.com', '9966332211', 'male']
        );*/

        //return student::all();

        //return student::all(["roll", "fname", "lname"]);

        //return student::all(["roll", "fname", "lname"])->where("roll", ">", "20");

        //return student::all()->where("roll", "=", "20");

        //return student::all()->whereIn("fname", ["Adarsh", "Sujal"]);
        return student::all()->whereNotIn("fname", ["Adarsh", "Sujal"]);
    }
}
