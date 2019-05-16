<?php

namespace App\Http\Resources\frontend\api;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerInformationResources extends JsonResource
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
            'email' =>$this->email,
            'pnumber' =>$this->pnumber,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'avatar'=>$this->avatar,

        ];
    }
}
