<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItemPrice extends Model
{
    //
    protected $table ='menu_item_price';
    protected $primaryKey='menu_item_price_id';
    protected $fillable=['menu_item_price_id','item_id','menu_item_price','created_at','updated_at'];
}
