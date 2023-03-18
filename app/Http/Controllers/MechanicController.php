<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;

class MechanicController extends Controller
{
    public function index(Request $request){

        $mechanics = Mechanic::with('cars')->select('*')->get();
        $result = $request['currentTime'];
        dd($result);

        return view('mechanic.index')->with('mechanics',$mechanics);
  

    }
}
