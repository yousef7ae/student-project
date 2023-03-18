<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'model' => 'required|string',
            'mechanic_id' => 'required|numeric|min:1',
            'image' =>'required'
            
        ];
    }

    public function messages(){

        return[

            'model.required' =>'model is required',
            'model.string' =>'model required string',
            'mechanic_id.required' =>'mechanic is required',
            'mechanic_id.min' => 'mechanic not selected',
            'image.required' =>'image is required'

        ];
    }
}
