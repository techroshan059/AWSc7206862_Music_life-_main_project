<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItemExtraMeal extends Model
{
    //
    protected $table = 'menu_item_extra_meals';
    protected $primaryKey ='menu_item_extra_meal_id';

    protected $fillable = ['item_id','extra_meal_name','extra_meal_price'];
}
