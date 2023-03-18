<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{   
    use SoftDeletes;
    use HasFactory;

    public function car(){
        return $this->belongsTo('App\Models\Car');
    }
}
