<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\Admin\RestaurantUpdate;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    //

   public  function index(){
       $restaurantData= Restaurant::get();
       $data= [];
       foreach ($restaurantData as $resData){
           $data = [
               'id'=>$resData->id,
             'restaurant_name'=>$resData->restaurant_name,
               'restaurant_owner'=>$resData->restaurant_owner,
               'address'=>$resData->address,
               'email_address'=>$resData->email_address,
               'telephone'=>$resData->telephone,
           ];
       }
       return view('admin.setting.restaurant',compact('data'));
   }
   public function editRestaurant(RestaurantUpdate $request){
       $resUpdate = Restaurant::findOrFail($request->id);
       $resUpdate->restaurant_name = $request->restaurant_name;
       $resUpdate->restaurant_owner = $request->restaurant_owner;
       $resUpdate->address = $request->address;
       $resUpdate->email_address = $request->email_address;
       $resUpdate->telephone = $request->telephone;
       if($resUpdate->save()){
           return redirect('admin/setting/restaurant')
               ->with('success','Successfully edited');
       }
   }
}
