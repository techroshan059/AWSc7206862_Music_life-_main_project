<?php

namespace App\Http\Resources\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Homepageslider extends FormRequest
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
            'title' => 'required|unique:homepagesliders,title',
            'sort_order'=>'required',
            'status'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=1920,height=800',
        ];
    }


   
}
