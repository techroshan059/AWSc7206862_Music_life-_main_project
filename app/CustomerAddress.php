<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    //

    protected $table = 'customer_addresses';
    protected $fillable = ['customer_id','delivery_location',
        'address_title',
        'first_name',
        'last_name',
        'organization',
        'detail_address_direction',
        'mobile_number',
        'alt_phone_number',
        'set_as_default'
    ];

}
