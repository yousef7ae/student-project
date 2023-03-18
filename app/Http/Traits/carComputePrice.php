<?php
namespace App\Http\Traits;

trait carComputePrice{

	public function value_discount($car){

		 $value_discount = ($car->discount/100) * $car->price;
		 return $value_discount;
	}

	public function value_tax($car){

	 $value_tax = ($car->tax /100) * $car->price;
	 return $value_tax;

	}
}