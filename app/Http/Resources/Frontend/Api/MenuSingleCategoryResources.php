<?php

namespace App\Http\Resources\Frontend\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuSingleCategoryResources extends JsonResource
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
            'title' =>$this->title,
            'menu_items'=>MenuItemsResources::collection($this->whenLoaded('MenuItem')),
            'country'=>CountryMenuCategoryResources::make($this->whenLoaded('Countries')),
        ];
    }


}
