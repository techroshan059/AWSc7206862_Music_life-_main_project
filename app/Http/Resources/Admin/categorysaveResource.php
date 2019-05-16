<?php

namespace App\Http\Resources\Admin;

use Illuminate\Foundation\Http\FormRequest;

class categorysaveResource extends FormRequest
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
            'title' => 'required',
            'country_id' => 'required',
            'category_type'=>'required',
            'status'=>'required'
        ];
    }
}
