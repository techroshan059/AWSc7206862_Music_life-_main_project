<?php

namespace App\Http\Resources\Frontend\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuItemsPriceResources extends JsonResource
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
            'menu_item_price_id' =>$this->menu_item_price_id,
            'item_id' =>$this->item_id,
            'menu_item_price' =>$this->	menu_item_price,
        ];
    }


}
