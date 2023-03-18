<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     session(['user_id' => 10]);
    return view('welcome');
});

Route::get('owner',[OwnerController::class,'index']);

Route::get('car',[CarController::class,'index']);

Route::get('mechanic',[MechanicController::class,'index'])->middleware('lang')->middleware('timezone');

Route::get('students',[StudentController::class,'index'])->middleware('lang');

Route::get('students/condition',[StudentController::class,'index1']);

Route::get('car/create',[CarController::class,'create']);

Route::post('car/store',[CarController::class,'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

