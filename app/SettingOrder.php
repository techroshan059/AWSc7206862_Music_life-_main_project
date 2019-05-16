<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingOrder extends Model
{
    //

    protected $table = 'settingorder';
    protected $fillable = ['o_minimum_order','o_tax_payment','o_delivery_amount'];
}
