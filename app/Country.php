<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table ='countries';
    protected $fillable = ['num_code','alpha_2_code','alpha_3_code','en_short_name','nationality'];

    public function Category(){
        return $this->HasMany(Category::class)->orderby('title','asc')->where('status','Active');
    }

}
