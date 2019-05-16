<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $fillable = ['title','category_type','status','save_token','country_id'];


    public function MenuItem(){
        return $this->hasMany(MenuItem::class)->where('item_status','1')->with('MenuItemPrice');
    }
    public function Countries(){
        return $this->BelongsTo(Country::class,'country_id','id');
    }

   
  
}
