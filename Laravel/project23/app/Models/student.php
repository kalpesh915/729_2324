<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $timestamps = false;

    /// accessors
    public function getFnameAttribute($fname){
        return strtoupper($fname);
    }

    public function getCityAttribute($city){
        return $city."( Gujarat )";
    }


    /// mutators
    public function setLnameAttribute($lname){
        return $this->attributes["lname"] = strtoupper($lname);
    }

    // one 2 one
    public function getPhoto(){
        return $this->hasOne(studentphoto::class);
    }


    // one 2 many
    public function getFees(){
        return $this->hasMany(fee::class);
    }
}
