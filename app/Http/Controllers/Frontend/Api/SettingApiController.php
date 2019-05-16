<?php

namespace App\Http\Controllers\Frontend\Api;


use App\Http\Resources\Frontend\Api\SettingOrderResources;
use App\Http\Resources\Frontend\Api\SettingGeneralResources;
use App\SettingOrder;
use App\Http\Controllers\Controller;

class SettingApiController extends Controller
{
    //

    public function getSettingOrder(){
            // $localData =  Local::with('currency')->get()->last();
            // return LocalResources::make($localData);

            $settingOrderData = SettingOrder::get()->last();
            // dd($settingOrder);
             return SettingOrderResources::make($settingOrderData);
    }
    public function getSettingGeneral(){
            // $localData =  Local::with('currency')->get()->last();
            // return LocalResources::make($localData);

            $settingGeneralData = \App\SettingGeneral::with('Currency')->get()->last();
            //dd($settingGeneralData);
            // dd($settingOrder);
             return SettingGeneralResources::make($settingGeneralData);
    }


}
