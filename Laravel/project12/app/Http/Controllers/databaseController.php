<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    //
    public function index(){
        //return DB::select("select * from students");

        //return DB::statement("select * from students where id = ?", ["1"]);

        //return DB::insert("insert into students (fname, lname, city, email, dateofbirth, gender) values ('Gaurav', 'Pandya', 'Ahamdabad', 'gaurav@gmail.com', '2002-02-02', 'male')");

        /*return DB::insert("insert into students (fname, lname, city, email, dateofbirth, gender) values (?, ?, ?, ?, ?, ?)",
        ['Gaurav', 'Pandya', 'Ahamdabad', 'gaurav@gmail.com', '2002-02-02', 'male']); */

        /*return DB::update("update students set fname = ?, lname = ?, city = ?, email = ?, dateofbirth = ?, gender = ? where id = ?",
        ["Bhavdeep", "Sorathiya", "Rajkot", "bhavdeep@gmail.com", "2002-03-03", "male", 10]); */

        /*return DB::update("update students set fname = ?, lname = ?, city = ?, email = ?, dateofbirth = ?, gender = ? where id > ?",
        ["Bhavdeep", "Sorathiya", "Rajkot", "bhavdeep@gmail.com", "2002-03-03", "male", 5]);*/

        //return DB::delete("delete from students where id > ?", [10]);

        //return student::all();
        //return student::all(["id", "fname", "lname", "city"]);
        //return student::all()->where("id", "=", 5);
        //return student::all(["id", "fname", "lname"])->where("id", "=", 5);
        //return student::all(["id", "fname", "lname"])->where("id", ">", 5);
        //return student::all()->whereBetween("id", ["1", "5"]);
        //return student::all()->whereNotBetween("id", ["1", "5"]);
        //return student::all()->whereIn("id", ["1", "5"]);
        //return student::all()->whereNotIn("id", ["1", "5"]);
    }
}
