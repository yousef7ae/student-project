<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{   use SoftDeletes;
    use HasFactory;

    public function registered_courses(){

        return $this->hasMany('App\Models\RegisteredCourse');
    }
}
