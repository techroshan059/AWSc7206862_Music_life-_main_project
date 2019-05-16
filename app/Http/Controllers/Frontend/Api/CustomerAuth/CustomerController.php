<?php

namespace App\Http\Controllers\Frontend\Api\CustomerAuth;

use App\Customer;
use App\Notifications\CustomerSignupActivate;
use Carbon\Carbon;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use JWTFactory;
use JWTAuth;

class CustomerController extends Controller
{



    



    public function login(Request $request)
   {

   
    $userInfo=[];
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email|max:255',
        'password'=> 'required'
    ]);
    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
    }
    $credentials = $request->only('email', 'password');
    $customClaims = [];
    try {
        if (!$token = JWTAuth::attempt($credentials, $customClaims)) { 
            return response()->json(['error' => 'invalid_credentials'], 401);
        }
        else{
            dd(JWTAuth::user());
        //    $userInfo['token']=$token;
        //    $userInfo['email']=JWTAuth::user()->email;
        //    $userInfo['userID']=JWTAuth::user()->UserId;
        //    $userInfo['PublicIP']=JWTAuth::user()->PublicIP;
        //    $userInfo['PrivateIP']=JWTAuth::user()->PrivateIP;
        //    $userInfo['userType']=JWTAuth::user()->UserType==1?'Brand':'Influencer';
        //    $updateUserData = User::findOrFail(JWTAuth::user()->UserId);
        //    $updateUserData->ApiToken = $token;
        //    $updateUserData->save();
        //     return response()->json(['userInfo'=>$userInfo]);
        }
        
    } 
    catch (JWTException $e) {
        return response()->json(['error' => 'could_not_create_token'], 500);
    }
   }


    public function registerNewCustomer(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required',
            'pnumber'=>'required|unique:customers,pnumber',
        ]);


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $customer = new Customer([
            'id'=>date('ymdhis'),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'pnumber'=>$request->pnumber,
            'ip_address'=>'127.0.0.1',
            'activation_token' => str_random(60)
        ]);
        $customer->save();
       // $customer->notify(new CustomerSignupActivate($customer));
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }


    public function getCustomerData(Request $request){
        return response()->json($request->user());
    }

    public function signupActivate($token)
    {
        $customer = Customer::where('activation_token', $token)->first();
        if (!$customer) {
            return response()->json([
                'message' => 'This activation token is invalid.'
            ], 404);
        }
        $customer->active = true;
        $customer->activation_token = '';
        $customer->save();
        return $customer;
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }




}
