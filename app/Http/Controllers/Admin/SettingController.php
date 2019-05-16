<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Currency;
use App\SettingGeneral;
use App\Http\Resources\Admin\LocalUpdate;
use App\SettingOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    //
    public function showOrder(){
        $data = SettingOrder::get()->last();
       return view('Admin.setting.order',compact('data'));
    }

    public function showGeneral(){
        $currencyData = Currency::orderBy('code','ASC')->get();
        $generalData = SettingGeneral::get()->last();
       return view('Admin.setting.general',compact('generalData','currencyData'));
    }

    public function showWorkingTime(){
        $generalData = SettingGeneral::get()->last();
        $timeFormat = false;
        if($generalData->time_format == 'H:i' || $generalData->time_format=='G:i'){
            $timeFormat= FALSE;
        }
        else{
            $timeFormat = true;
        }
        $workingtimeData = \App\FoodDeliveryWorkingTime::get()->last();
        
        
        return view('Admin.setting.workingtimes',compact('timeFormat','workingtimeData','generalData'));
    }
    public function updateOrderSetting(Request $request){

     

        $data = SettingOrder::get();
        $saveData = count($data)>0?SettingOrder::get()->last():new SettingOrder();
        $saveData->o_minimum_order = $request->o_minimum_order;
        $saveData->o_tax_payment=$request->o_tax_payment;
        $saveData->o_delivery_amount=$request->o_delivery_amount;
        if($saveData->save()){
   
        return redirect('ktm-admin/setting/order')->withSuccess('Successfully Updated');
        }
       
    }
    public function updateGeneralSetting(Request $request){
        $data = SettingGeneral::get();
        $saveData = count($data)>0?SettingGeneral::get()->last():new SettingGeneral();
        $saveData->date_format = $request->date_format;
        $saveData->time_format=$request->time_format;
        $saveData->currency_id=$request->currency_id;
        if($saveData->save()){
        return redirect('ktm-admin/setting/general')->withSuccess('Successfully Updated');
        }
       
    }
    public function updateWorkingTimeSetting(Request $request){
  

  

      $data = \App\FoodDeliveryWorkingTime::get();
      $saveData = count($data)>0?\App\FoodDeliveryWorkingTime::get()->last():new \App\FoodDeliveryWorkingTime();
      $saveData->p_monday_from = date("H:i:s",strtotime($request->p_monday_from));
      $saveData->p_monday_to= date("H:i:s",strtotime($request->p_monday_to));
      $saveData->p_monday_dayoff = $request->p_monday_dayoff;

      $saveData->p_tuesday_from = date("H:i:s",strtotime($request->p_tuesday_from));
      $saveData->p_tuesday_to= date("H:i:s",strtotime($request->p_tuesday_to));
      $saveData->p_tuesday_dayoff = $request->p_tuesday_dayoff;

      $saveData->p_wednesday_from = date("H:i:s",strtotime($request->p_wednesday_from));
      $saveData->p_wednesday_to= date("H:i:s",strtotime($request->p_wednesday_to));
      $saveData->p_wednesday_dayoff = $request->p_wednesday_dayoff;

      $saveData->p_thursday_from = date("H:i:s",strtotime($request->p_thursday_from));
      $saveData->p_thursday_to= date("H:i:s",strtotime($request->p_thursday_to));
      $saveData->p_thursday_dayoff= $request->p_thursday_dayoff;

      $saveData->p_friday_from = date("H:i:s",strtotime($request->p_friday_from));
      $saveData->p_friday_to= date("H:i:s",strtotime($request->p_friday_to));
      $saveData->p_friday_dayoff = $request->p_friday_dayoff;

      $saveData->p_saturday_from = date("H:i:s",strtotime($request->p_saturday_from));
      $saveData->p_saturday_to= date("H:i:s",strtotime($request->p_saturday_to));
      $saveData->p_saturday_dayoff = $request->p_saturday_dayoff;

      $saveData->p_sunday_from = date("H:i:s",strtotime($request->p_sunday_from));
      $saveData->p_sunday_to= date("H:i:s",strtotime($request->p_sunday_to));
      $saveData->p_sunday_dayoff =$request->p_sunday_dayoff;




      $saveData->d_monday_from = date("H:i:s",strtotime($request->d_monday_from));
      $saveData->d_monday_to= date("H:i:s",strtotime($request->d_monday_to));
      $saveData->d_monday_dayoff = $request->d_monday_dayoff;

      $saveData->d_tuesday_from = date("H:i:s",strtotime($request->d_tuesday_from));
      $saveData->d_tuesday_to= date("H:i:s",strtotime($request->d_tuesday_to));
      $saveData->d_tuesday_dayoff = $request->d_tuesday_dayoff;

      $saveData->d_wednesday_from = date("H:i:s",strtotime($request->d_wednesday_from));
      $saveData->d_wednesday_to= date("H:i:s",strtotime($request->d_wednesday_to));
      $saveData->d_wednesday_dayoff = $request->d_wednesday_dayoff;

      $saveData->d_thursday_from = date("H:i:s",strtotime($request->d_thursday_from));
      $saveData->d_thursday_to= date("H:i:s",strtotime($request->d_thursday_to));
      $saveData->d_thursday_dayoff= $request->d_thursday_dayoff;

      $saveData->d_friday_from = date("H:i:s",strtotime($request->d_friday_from));
      $saveData->d_friday_to= date("H:i:s",strtotime($request->d_friday_to));
      $saveData->d_friday_dayoff = $request->d_friday_dayoff;

      $saveData->d_saturday_from = date("H:i:s",strtotime($request->d_saturday_from));
      $saveData->d_saturday_to= date("H:i:s",strtotime($request->d_saturday_to));
      $saveData->d_saturday_dayoff = $request->d_saturday_dayoff;

      $saveData->d_sunday_from = date("H:i:s",strtotime($request->d_sunday_from));
      $saveData->d_sunday_to= date("H:i:s",strtotime($request->d_sunday_to));
      $saveData->d_sunday_dayoff =$request->d_sunday_dayoff;


      if($saveData->save()){
      return redirect('ktm-admin/setting/working-time')->withSuccess('Successfully Updated');
      }
       
    }

    public function showPaymentMethod()
    {
        return view ('Admin.setting.paymentmethod');
    }

    public function updatePaymentMethod(Request $request){

        $getDataPayment  = \App\PaymentMethod::get()->last();
       // $storePayment = count($getDataPayment)->\App\PaymentMethod:?
    }

}
