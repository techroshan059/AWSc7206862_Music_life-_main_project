<?php

namespace App\Http\Resources\Frontend\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyResources extends JsonResource
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
            'symbol' =>$this->symbol,
        ];
    }


}
