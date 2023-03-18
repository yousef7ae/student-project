<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Mechanic;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CarRequest;
use App\Http\Traits\carComputePrice;
use App;
class CarController extends Controller
{
  use carComputePrice;
    public function index(Request $request){

      App::setLocale('ar');

       $cars = Car::with('owner')->with('mechanic')->select('*')->get();

       foreach($cars as $car){
         
         $link_image = Storage::url($car->image);
         $car->image = $link_image;

  /*$car->final_price  = $car->price - $this->value_discount($car) + $this->value_tax();*/

       }
       
       return view('car.index')->with('cars',$cars);

    }

    public function create(){
      $mechanics = Mechanic::select('id','name')->get();
      $user_id = session('user_id');
      return view('file.create')->with('mechanics',$mechanics)->with('user_id',$user_id);
    }

    public function store(CarRequest $request){
      
      //get file from request
      //detrmine path of file 
      //determine name of file 
      //uploade/put/move
      //vreify




      $image = $request->file('image');
      $path = 'uploaded/images/';
      $name = time()+rand(1,1000000) . '.'. $image->getClientOriginalExtension();

      Storage::disk('local')->put($path.$name,file_get_contents($image));

      //Storage::disk('local')->exists($path.$name);

       $model = $request['model'];
       $mechanic_id = $request['mechanic_id'];

       $car = new Car();
        
        $car->model = $model;
        $car->mechanic_id = $mechanic_id;
        $car->image = $path.$name;

        $result = $car->save();




      return redirect()->back()->with('result',$result);
    }
}
