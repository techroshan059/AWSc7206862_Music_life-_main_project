<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodDeliveryWorkingTime extends Model
{
    //
    protected $table = 'food_delivery_working_times';
   protected $fillable = ['p_monday_from', 'p_monday_to', 'p_monday_dayoff', 'p_tuesday_from', 'p_tuesday_to', 'p_tuesday_dayoff', 'p_wednesday_from', 'p_wednesday_to', 'p_wednesday_dayoff', 'p_thursday_from', 'p_thursday_to', 'p_thursday_dayoff', 'p_friday_from', 'p_friday_to', 'p_friday_dayoff', 'p_saturday_from', 'p_saturday_to', 'p_saturday_dayoff', 'p_sunday_from', 'p_sunday_to', 'p_sunday_dayoff', 'd_monday_from', 'd_monday_to', 'd_monday_dayoff', 'd_tuesday_from', 'd_tuesday_to', 'd_tuesday_dayoff', 'd_wednesday_from', 'd_wednesday_to', 'd_wednesday_dayoff', 'd_thursday_from', 'd_thursday_to', 'd_thursday_dayoff', 'd_friday_from', 'd_friday_to', 'd_friday_dayoff', 'd_saturday_from', 'd_saturday_to', 'd_saturday_dayoff', 'd_sunday_from', 'd_sunday_to', 'd_sunday_dayoff']; 
   public $timestamps = false;
}
