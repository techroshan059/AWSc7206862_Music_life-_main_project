<?php

namespace App\Http\Resources\Admin;


use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class RestaurantUpdate extends FormRequest
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function authorize()
    {
        // Only allow logged in users
        // return \Auth::check();
        // Allows all users in
        return true;
    }

    public function rules()
    {



        return [

            'restaurant_name'=>'required',
            'restaurant_owner'=>'required',
            'address'=>'required',
            'email_address'=>'required|email',
            'telephone'=>'required',

        ];
    }


   
}
