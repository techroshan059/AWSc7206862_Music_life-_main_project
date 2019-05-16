<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customerData = Customer::orderBy('first_name','ASC')->paginate(20);

        return view('admin.customer.index',compact('customerData'));
        //
    }

    public function singleCustomerData($id)
    {
        
        $signleCustomerData = Customer::where('id',$id)->get()->last();
        return view('admin.customer.single',compact('signleCustomerData'));
    }

    public function search(Request $request)
    {




        $name = $request->first_name;
        $email =$request->email ;
        $status_me =$request->status ;
        $created_at =  $request->created_at;


//        dd($request->all());



        if($request->first_name!=null){
            $customerData = Customer::orderBy('first_name','ASC')->where('first_name','like','%'.$request->first_name)->get();
        }

        if($request->email!=null){
            $customerData = Customer::orderBy('first_name','ASC')->where('email','like','%'.$request->email)->get();
        }

        if($request->status!=2){
            $customerData = Customer::orderBy('first_name','ASC')->where('status',$request->status)->get();
        }

        if($request->created_at!=null){
            $customerData = Customer::orderBy('first_name','ASC')->where('created_at',$request->created_at)->get();
        }

        if($request->first_name == null && $request->email==null && $request->status==2 && $request->created_at==null) {

            $customerData = Customer::orderBy('first_name', 'ASC')->paginate(20);
        }

            return view('admin.customer.index',compact('customerData','name','email','status_me','created_at','request'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
