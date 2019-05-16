<?php

namespace App\Http\Resources\Admin;

use Illuminate\Foundation\Http\FormRequest;

class categoryUpdate extends FormRequest
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
            'title' => 'required|unique:categories,title,'.$id,
            'category_type'=>'required',
            'status'=>'required'
        ];
    }
}
