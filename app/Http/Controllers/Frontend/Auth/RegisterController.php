<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/signin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer');
    }


    public function showRegistrationForm()
    {

        return view('frontend.auth.signup');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));


        return redirect($this->redirectPath());

    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'pnumber' => 'required|string|max:50|unique:customers',
            'email' => 'required|string|email|max:100|unique:customers',

            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return Customer::create([
            'id'=>date('ymdhis'),
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'pnumber' => $data['pnumber'],
            'email' => $data['email'],
            'ip_address'=>'127.0.0.1',
            'remember_token'=>$data['_token'],
            'status'=>'0',
            'password' => Hash::make($data['password']),
        ]);
    }

    public function registerNewCustomer(Request $request)
    {
        $request->validate( [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email||unique:customers,email',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'pnumber'=>'required|unique:customers,pnumber',
        ],
        [
            'pnumber.required'=>'Mobile Number field is required',
            'password.regex'=>'Your password should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character',
             'password.min'=>'Your password must be more than 8 characters long.'
        ]
    );


      
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
         if($customer->save()){
               if($request->sub_newfeed=='yes'){
                   $subNew = new \App\NewsLetterSubscribers();
                   $subNew->email_address = $customer->email;
                   if($subNew->save()){
                    return \redirect('/');
                   }
               }
                return \redirect('/');
         }
      
    }
}
