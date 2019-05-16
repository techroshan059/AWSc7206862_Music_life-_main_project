<?php

namespace App\Http\Resources\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DiscountVoucherSave extends FormRequest
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function authorize()
    {
       return true ;
    }

    public function rules()
    {
        return [
            'title'=>'required',
            'discount_percentage'=>'required',
            'discount_type'=>'required',
            'from_date'=>'required',
            'total_days'=>'required',
        ];
    }
}
