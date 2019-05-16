<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingGeneral extends Model
{
    //
    protected $table = 'settinggeneral';
    protected $fillable = ['date_format','time_format','currency_id'];

    public $timestamps = false;


    public function Currency(){
        return $this->HasOne(Currency::class,'id','currency_id');
    }

}
