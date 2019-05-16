<?php

namespace App\Http\Resources\Admin;


use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class LocalUpdate extends FormRequest
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

            'country_id'=>'required',
            'currency_id'=>'required',
            'minimum_order_amount'=>'required|regex:/^\d*(\.\d{1,2})?$/',
        ];
    }


   
}
