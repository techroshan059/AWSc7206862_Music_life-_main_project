<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Currency;
use App\Http\Resources\Admin\LocalUpdate;
use App\Local;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalController extends Controller
{
    //
    public  function index(){

        $countryData = Country::orderBy('country_name','ASC')->get();
        $currencyData= Currency::orderBy('country','ASC')->get();
        $localData = Local::with('currency')->get();

        $data = [];
        foreach ($localData as $local){
            $data =
                [
                    'id'=>$local->id,
                    'country_id'=>$local->country_id,
                    'currency_id'=>$local->currency_id,
                    'minimum_order_amount'=>$local->minimum_order_amount,
                    'currency_symbol'=>$local->currency->symbol,
                ];
        }

        //dd($data);
        return view('admin.setting.local',compact('countryData','currencyData','data'));
    }

    public function editlocal(LocalUpdate $request){
        $updateLocal= Local::findOrFail($request->id);
        $updateLocal->country_id = $request->country_id;
        $updateLocal->minimum_order_amount = $request->minimum_order_amount;
        $updateLocal->currency_id = $request->currency_id;
        if($updateLocal->save()){
            return redirect('admin/setting/local')
                ->with('success','Successfully edited');
        }
    }
}
