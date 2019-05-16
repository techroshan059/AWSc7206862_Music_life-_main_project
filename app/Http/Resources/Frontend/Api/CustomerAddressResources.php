<?php

namespace App\Http\Resources\frontend\api;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerAddressResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'delivery_location' =>$this->delivery_location,
            'address_title' =>$this->address_title,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'organization'=>$this->organization,
            'detail_address_direction'=>$this->detail_address_direction,
            'mobile_number'=>$this->mobile_number,
            'alt_phone_number'=>$this->alt_phone_number,
            'set_as_default'=>$this->set_as_default,
        ];
    }
}
