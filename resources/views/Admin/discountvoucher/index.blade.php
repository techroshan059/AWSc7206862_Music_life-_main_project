@extends('layouts.app')

@section('ktmspice-admin-content')
<style>
.percentage-circle{

    width: 56px;
    height: 55px;
    background: #076c93;
    border-radius: 100%;
    text-align:center;
}
.percentage-circle small{
    line-height:56px;
    color:#fbfbfb;
    font-size:17px;
    font-weight:1000;
}
</style>

          <div class="page-header">
            <h3 class="page-title">
            Discount Vouchers List
            </h3>
            <nav aria-label="breadcrumb">
              <a href="{{url('admin/manage/discount-voucher/addnew')}}" class="btn btn-primary btn-sm">Add New Discount Voucher</a>
            </nav>
          </div>


@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="row">
         
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th>S.No</th>
                          <th>Title</th>
                          <th>Type</th>
                          <th>%</th>
                          <th>Max </th>
                          <th>End Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        

                        @if(count($discountVoucherData)>0)
                           <?php $i=1?>
                            @foreach($discountVoucherData as $discountData)
                            <tr>
                          <td>{{$i}}</td>
                          <td>{{strlen($discountData->title)>10?substr($discountData->title,0,10).'...':$discountData->title}}</td>
                          <td>{{$discountData->discount_type}}</td>
                          <td>{{$discountData->discount_percentage}}%</td>
                            
                         <td>asdasdalsk</td>
                         
                          @if(date('Y-m-d',strtotime(Carbon\Carbon::now()))>=$discountData->to_date)
                          <td><label style="color:red">{{date('j M Y',strtotime($discountData->to_date))}}</label></td>
                            <td><label class="badge badge-danger badge-pill">Discount Expired</label></td>
                            @else
                            <td>{{date('j M Y',strtotime($discountData->to_date))}}</td>
                            <td><label class="badge badge-success badge-pill">10 days left</label></td>
                            @endif()
                          <td>
                            <a href="{{url('admin/manage/discount-voucher/single/'.$discountData->id)}}"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Data" style="font-size: 20px;color:#04B76B" ></i></a>
                            <a href=""><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit Data"  style="font-size: 20px;"></i></a>
                            <a onclick="return confirm('Would you like to delete this discount voucher')"  href="{{url('admin/manage/discount-voucher/deletediscount/'.$discountData->id)}}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete Data"  style="font-size: 20px;color:red"></i></a>
                          </td>
                       
                        </tr>
                        <?php $i++ ?>
                            @endforeach()
                            @else
                            <tr>
                            <td colspan="8" style="text-align:center">No records found</td>

            
                        </tr>
                        @endif()
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
               
</div>


@stop()