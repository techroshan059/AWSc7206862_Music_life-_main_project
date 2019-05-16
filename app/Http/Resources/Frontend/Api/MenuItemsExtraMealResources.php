<?php

namespace App\Http\Resources\Frontend\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuItemsExtraMealResources extends JsonResource
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
            'menu_item_extra_meal_id' =>$this->menu_item_extra_meal_id,
            'item_id' =>$this->item_id,
            'extra_meal_name' =>$this->extra_meal_name,
            'extra_meal_price' =>$this->extra_meal_price,
        ];
    }


}
