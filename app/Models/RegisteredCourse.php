<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class RegisteredCourse extends Model
{   use SoftDeletes;
    use HasFactory;

    public function course(){
        return $this->belongsTO('App\Models\Course');
    }
}
