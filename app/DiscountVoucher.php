<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscountVoucher extends Model
{
    //
    protected $table = 'discount_vouchers';
    protected $fillable=['title','from_date','to_date','discount_percentage','discount_type','offer_code','max_order_amount','total_days'];
}
