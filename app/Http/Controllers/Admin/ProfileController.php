<?php

namespace App\Http\Controllers\Admin;

use App\Http\adminHelper;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //

    public function index(){
        $userData = User::findOrfail(Auth::guard('web')->user()->id);
        return view('admin.setting.profile');
    }

    public function editprofile(Request $request){


        if($request->password==null){
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email'

            ]);
        }
        else{
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'min:8|required_with:Cpassword|same:Cpassword',


            ]);
        }

        $updateUserData = User::findOrFail(Auth::guard('web')->user()->id);
         if($request->password == null){

             $updateUserData->name = $request->name;
             $updateUserData->email = $request->email;
         }
         else{
             $updateUserData->name = $request->name;
             $updateUserData->email = $request->email;
             $updateUserData->password = Hash::make($request->password) ;
         }
      if($updateUserData->save()){
          return redirect('admin/setting/profile?token='.adminHelper::getAdminData()->remember_token)
              ->with('success','Successfully edited');
      }
    }
}
