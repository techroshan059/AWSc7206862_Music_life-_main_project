<?php

namespace App\Http\Controllers\Frontend\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{

    //


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    public function showLoginForm()
    {

        return view('frontend.auth.signin');
    }

  

    public function logout(Request $request)
    {

        $this->guard()->logout();

        $request->session()->invalidate();

        Session::flash('successMessage','You have been successfully logout');

        return $this->loggedOut($request) ?: redirect('/signin');
    }


    protected function credentials(Request $request)
    {
        //dd($request->all());
        // return $request->only($this->username(), 'password');
        return ['email' => $request->email, 'password' => $request->password, 'status' => '1'];
    }


    protected function authenticated()
    {
        //dd(Auth::guard('customer')->id());
        if(Auth::guard('customer')->check()){

            $this->middleware('guest:customer')->except('logout');
            return redirect()->intended($this->redirectTo);
        }


    }


    protected function guard()
    {
        return Auth::guard('customer');
    }
}
