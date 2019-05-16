<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    protected $table = 'local_data';

    protected $fillable = ['country_id','currency_id','minimum_order_amount'];


    public  function  currency(){
        return $this->belongsTo(Currency::class,'currency_id','id');
    }
}
