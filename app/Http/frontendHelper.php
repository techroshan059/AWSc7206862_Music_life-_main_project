<?php
/**
 * Created by PhpStorm.
 * User: roshan
 * Date: 9/19/18
 * Time: 12:38 PM
 */

namespace App\Http;


use App\Customer;
use Illuminate\Support\Facades\Auth;


class frontendHelper
{

    public static function getCustomerData(){
        if(Auth::guard('customer')->check()){
            return Customer::findOrFail(Auth::guard('customer')->id());
        }
        else{

        }
    }

}
