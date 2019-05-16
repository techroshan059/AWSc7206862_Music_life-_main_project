<?php

namespace App\Http\Resources\Frontend\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuItemsResources extends JsonResource
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
            'item_id' =>$this->item_id,
            'item_name' =>$this->item_name,
            'item_description' =>$this->item_description,
            'item_image_name' =>$this->item_image_name,
            'item_flavors' =>$this->item_flavors,
            'item_soda' =>$this->item_soda,
            'item_spice' =>$this->item_spice,
            'MenuItemPrice'=>MenuItemsPriceResources::make($this->whenLoaded('MenuItemPrice')),
            
        ];
    }


}
