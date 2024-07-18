<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //

    public function findStudent($id){
        return student::find($id);
    }
}
