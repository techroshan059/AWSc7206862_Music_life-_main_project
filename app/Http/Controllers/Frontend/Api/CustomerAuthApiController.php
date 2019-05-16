<?php

namespace App\Http\Controllers\Frontend\Api;

use App\Category;
use App\Customer;
use App\Http\Resources\frontend\api\CustomerInformationResources;
use App\Http\Resources\Frontend\Api\MenuCategoriesResources;
use App\Http\Resources\Frontend\Api\MenuSingleCategoryResources;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerAuthApiController extends Controller
{
    //

    public function getCustomerData(){
        dd(Auth::guard('customer')->check());
        if(Auth::guard('customer')->check()){
            $customerData =  Customer::findOrFail(Auth::guard('customer')->id());

            return CustomerInformationResources::make($customerData);

        }

    }

    public function getMenuItems(){

    }
}
