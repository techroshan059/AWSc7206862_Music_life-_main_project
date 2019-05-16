<?php
/**
 * Created by PhpStorm.
 * User: roshan
 * Date: 9/19/18
 * Time: 12:38 PM
 */

namespace App\Http;


use App\Local;
use App\Country;
use App\Restaurant;
use App\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Helper\Helper;

class adminHelper
{

    public static function getAdminData(){
            return User::findOrFail(Auth::guard('admin')->user()->id);
    }

    public static function getCountries(){
        return Country::orderBy('en_short_name','ASC')->get();
    }

    public static function getLocal(){
        return Local::with('currency')->get()->last();
    }

    public static  function getRestaurantData(){
        return Restaurant::first();
    }

    public static function getTimeFormat(){
        return \App\SettingGeneral::last();
    }

}
