<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homepageslider extends Model
{
    //homepagesslider model
    //table name  = homepagesliders
    protected $table = 'homepagesliders';
    protected $fillable = ['title','link','image','sort_order','status','save_token'];
}
