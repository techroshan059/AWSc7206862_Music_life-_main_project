<?php

namespace App\Http\Resources\Admin;


use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class HomepagesliderUpdate extends FormRequest
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
        $id = $this->route('id');


        return [
            'title' => 'required|unique:homepagesliders,title,'.$id,
            'sort_order'=>'required',
            'status'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg|max:2048|dimensions:width=1920,height=800',
        ];
    }


   
}
