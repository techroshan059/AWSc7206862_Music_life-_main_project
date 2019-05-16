<?php

namespace App\Http\Controllers\frontend;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ManageController extends Controller
{


    public function index()
    {
      return view('frontend.customer.manage.index');
    }

    public  function updateProfile(Request $request){

       $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'pnumber' => 'required|string|max:50|unique:customers,pnumber,'.Auth::guard('customer')->id(),
        ]);

        $updateProfile = Customer::findOrFail(Auth::guard('customer')->id());
        $updateProfile->first_name = $request->input('first_name');
        $updateProfile->last_name = $request->input('last_name');
        $updateProfile->pnumber = $request->input('pnumber');
    
       

            if($request->hasFile('avatar')){
    if($request->file('avatar')->isValid()){

        $avatarname = $request->file('avatar');
        if($updateProfile->avatar!=null){
        $cus_avatar_path = public_path('frontend/images/customers').'/'.$updateProfile->avatar;
        unlink($cus_avatar_path);
        }

        $AvatarCusName = 'profile-'.$updateProfile->id. '.' . $avatarname->getClientOriginalExtension();
        $request->file('avatar')->move("frontend/images/customers/", $AvatarCusName);
        $updateProfile->avatar = $AvatarCusName;
    }
}
       
        if($updateProfile->save()){
            Session::flash('successMessage','Your Profile is successfully updated');
            return redirect('/manage/index/');
        }
    }
    public function getLocations(){
       // dd();

       $CustAddressData = \App\CustomerAddress::where('customer_id',Auth::guard('customer')->id())->get();
      
       return view('frontend.customer.manage.location',\compact('CustAddressData'));
    }

    public  function showAddNewLocation()
    {
        return view('frontend.customer.manage.new_location');
    }
    public  function storeAddNewLocation(Request $request)
    {
       
        $request->validate([
            'delivery_location' => 'required|max:250|min:10',
            'address_title' => 'required|max:50|min:4',
            'first_name' => 'required|max:50|min:4',
            'last_name' => 'required|max:50|min:4',
            'detail_address_direction'=>'required|max:500|min:10',
            'mobile_number'=>'required|max:10|min:10',
        ]);
       
 
        $saveNewCustomerAddressess = new \App\CustomerAddress();
        $saveNewCustomerAddressess->customer_id = Auth::guard('customer')->id();
        $saveNewCustomerAddressess->delivery_location = $request->delivery_location;
        $saveNewCustomerAddressess->address_title = $request->address_title;
        $saveNewCustomerAddressess->first_name = $request->first_name;
        $saveNewCustomerAddressess->last_name = $request->last_name;
        $saveNewCustomerAddressess->detail_address_direction = $request->detail_address_direction;
        $saveNewCustomerAddressess->mobile_number = $request->mobile_number;
        $saveNewCustomerAddressess->organization = $request->organization;
        $saveNewCustomerAddressess->alt_phone_number = $request->alt_phone_number;
        $saveNewCustomerAddressess->set_as_default = $request->set_as_default==true?'1':'0';
 
        //dd($saveNewCustomerAddressess);
 
       if($saveNewCustomerAddressess->save()){
        Session::flash('successMessage','Your Location is successfully saved');
        return redirect('/manage/locations/');
       }
    }
    public  function showEditLocation($id)
    {
        $getCustAddressData = \App\CustomerAddress::findOrFail($id);
        return view('frontend.customer.manage.edit_location',compact('getCustAddressData'));
    }
    public  function storeEditLocation(Request $request,$id)
    {
       
        $request->validate([
            'delivery_location' => 'required|max:250|min:10',
            'address_title' => 'required|max:50|min:4',
            'first_name' => 'required|max:50|min:4',
            'last_name' => 'required|max:50|min:4',
            'detail_address_direction'=>'required|max:500|min:10',
            'mobile_number'=>'required|max:10|min:10',
        ]);
       
 
        $saveNewCustomerAddressess = \App\CustomerAddress::findOrFail($id);
        $saveNewCustomerAddressess->customer_id = Auth::guard('customer')->id();
        $saveNewCustomerAddressess->delivery_location = $request->delivery_location;
        $saveNewCustomerAddressess->address_title = $request->address_title;
        $saveNewCustomerAddressess->first_name = $request->first_name;
        $saveNewCustomerAddressess->last_name = $request->last_name;
        $saveNewCustomerAddressess->detail_address_direction = $request->detail_address_direction;
        $saveNewCustomerAddressess->mobile_number = $request->mobile_number;
        $saveNewCustomerAddressess->organization = $request->organization;
        $saveNewCustomerAddressess->alt_phone_number = $request->alt_phone_number;
        $saveNewCustomerAddressess->set_as_default = $request->set_as_default==true?'1':'0';
 
        //dd($saveNewCustomerAddressess);
 
       if($saveNewCustomerAddressess->save()){
        Session::flash('successMessage','Your Location is successfully updated');
        return redirect('/manage/locations/');
       }
    }

    public function deleteCustAddress($id)
    {
        # code...
    }


}
