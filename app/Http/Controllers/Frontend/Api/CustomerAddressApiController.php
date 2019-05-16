<?php

namespace App\Http\Controllers\Frontend\Api;

use App\CustomerAddress;
use App\Http\Resources\frontend\api\CustomerAddressResources;
use App\Http\Resources\frontend\api\CustomerInformationResources;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerAddressApiController extends Controller
{
   public function getCustomerAddress($cID){
       $cID = substr($cID,8,12);
       //dd($cID);
       $customerAddressData =CustomerAddress::where('customer_id',$cID)->get();
      // dd($customerAddressData);
      return CustomerAddressResources::collection($customerAddressData);

   }
   public function addNewCustomerAddress(Request $request){
       $cID = substr($request->customer_id,8,12);
       $validator = Validator::make($request->all(), [
           'delivery_location' => 'required|max:250|min:10',
           'address_title' => 'required|max:50|min:4',
           'first_name' => 'required|max:50|min:4',
           'last_name' => 'required|max:50|min:4',
           'detail_address_direction'=>'required|max:500|min:10',
           'mobile_number'=>'required|max:10|min:10',
       ]);
       if ($validator->fails()) {
           return response()->json(['error' => $validator->errors()], 401);
       }

       $saveNewCustomerAddressess = new CustomerAddress();
       $saveNewCustomerAddressess->customer_id = $cID;
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

      $saveNewCustomerAddressess->save();
       // $customer->notify(new CustomerSignupActivate($customer));
       return response()->json([
           'message' => 'Successfully created user!'
       ], 201);
   }

   public function deleteCustomerAddress($id){
       $dltCustomerAddress = CustomerAddress::findorFail($id);
       if ($dltCustomerAddress->delete()) {
           return new CustomerAddressResources($dltCustomerAddress);
       }
   }
   
}
