<?php

namespace App\Http\Resources\Frontend\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class CountryMenuCategoryResources extends JsonResource
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
            'nationality' =>$this->nationality,
            'MenuCategory'=>MenuCategoriesResources::collection($this->whenLoaded('Category')),
        ];
    }


}
