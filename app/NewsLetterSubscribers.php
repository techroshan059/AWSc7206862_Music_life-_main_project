<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsLetterSubscribers extends Model
{
    protected $table ='newsletter_subscribers';
    protected $fillable = ['email_address','status'];
}
