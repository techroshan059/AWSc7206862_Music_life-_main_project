<?php

namespace App\Http\Resources\Frontend\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingGeneralResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      //  dd($request);
        return [
            'id' =>$this->id,
            'date_format' =>$this->date_format,
            'time_format' =>$this->time_format,
            'currency_id' =>$this->currency_id,
            'currency'=>CurrencyResources::make($this->whenLoaded('Currency')),
        ];
    }


}
