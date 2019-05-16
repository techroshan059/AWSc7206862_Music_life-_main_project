<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    //
    protected $table = 'menu_items';
  
    protected $fillable=['item_id',
        'category_id',
        'item_name',
        'item_description',
        'item_image_name',
        'item_flavors',
        'item_soda',
        'item_spice',
        'item_meta_keywords',
        'item_status'];
// protected primaryKey='item_id';

//protected $primaryKey='item_id';


    public function category(){
        return $this->hasOne(Category::class,'id','category_id')->with('Countries');
    }
    public function MenuItemPrice(){
        return $this->hasOne(MenuItemPrice::class,'item_id','item_id')->where('isactive','1');
    }
    
}
