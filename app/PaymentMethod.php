<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table="payment_methods";
    protected $fillable=['id', 'payment_method', 'public_key', 'private_key', 'description', 'is_active'];
}
