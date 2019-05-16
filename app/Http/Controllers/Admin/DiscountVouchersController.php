<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DiscountVoucher;
use App\Http\Resources\Admin\DiscountVoucherSave as DiscountVoucherSaveResource;
use Carbon\Carbon;

class DiscountVouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

      
        $discountVoucherData = DiscountVoucher::paginate(10);
        return view('admin.discountvoucher.index',compact('discountVoucherData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.discountvoucher.addnew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiscountVoucherSaveResource $request)
    {
        //

        $startDate = $request->from_date;
        $daystosum = $request->total_days;
        $end_date = date('Y-m-d', strtotime($startDate.' + '.$daystosum.' days'));
      

        $discount_type = $request->discount_type;

        if($discount_type=='menus' || $discount_type=='catering')
        {
            $discoutVoucherData =[
                'title'=>$request->title,
                'discount_percentage'=>$request->discount_percentage,
                'discount_type'=>$request->discount_type,
                'max_order_amount'=>$request->discount_type_text,
                'from_date'=>date('Y-m-d',strtotime($request->from_date)),
                'to_date'=>$end_date,
                'total_days'=>$request->total_days,
    
            ];

            //mail to all customers
        }
        else{
            $discoutVoucherData =[

                'title'=>$request->title,
                'discount_percentage'=>$request->discount_percentage,
                'discount_type'=>$request->discount_type,
                'offer_code'=>$request->discount_type_text,
                'from_date'=>date('Y-m-d',strtotime($request->from_date)),
                'to_date'=>$end_date,
                'total_days'=>$request->total_days,
    
            ];
        }
       // dd($discoutVoucherData);

        if(DiscountVoucher::create($discoutVoucherData)){
            return redirect('admin/manage/discount-voucher')->withSuccess('New discount has been successfully added');
        }
       
      



      
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
        $discountData = DiscountVoucher::findOrFail($id);
        if($discountData->delete())
        {
            return redirect('/admin/manage/discount-voucher')->withSuccess('Successfully Deleted');
        }
    }
    public function singleDiscountVoucher($id)
    {
        $discountData = DiscountVoucher::findOrFail($id);
        return view('admin.discountvoucher.single',compact('discountData'));

    }
}
