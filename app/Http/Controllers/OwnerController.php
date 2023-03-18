<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index(){

        $owners = Owner::with('car')->with('car.mechanic')->select('*')->get();
        //dd($owners->toArray());
        return view('owner.index')->with('owners',$owners);
    }
}
