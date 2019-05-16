<?php

namespace App\Http\Resources\Frontend\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingOrderResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //dd('sss');
        return [
            'o_minimum_order' =>$this->o_minimum_order,
            'o_tax_payment' =>$this->o_tax_payment,
            'o_delivery_amount' =>$this->o_delivery_amount,
        ];
    }


}
