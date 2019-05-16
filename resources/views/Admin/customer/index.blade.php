@extends('layouts.app')

@section('ktmspice-admin-content')
<style>
    .form-control{
        padding: 7px;
    }
</style>
    <div class="page-header">
        <h3 class="page-title">
           Customers List
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customers</li>
            </ol>
        </nav>
    </div>


    <div class="row">



        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Customers List


                    </h4>



                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>

                             <form method="POST">
                                 @csrf()
                                 <tr>

                                     <th colspan="2">
                                         <input type="text" class="form-control" name="first_name" value="{{isset($request->first_name)?$request->first_name:''}}" placeholder="Customer Name">
                                     </th>
                                     <th>
                                         <input type="text" name="email" value="{{isset($request->email)?$request->email:''}}" class="form-control" placeholder="Email">
                                     </th>
                                     <th colspan="2">

                                         <select name="status"  style="height: 33px;" class="form-control">
                                             <option value="2" {{((isset($request->status))==2)?'selected':''}} >Select Status</option>
                                             <option value="1" {{((isset($request->status))==1)?'selected':''}}>Enable</option>
                                             <option value="0" {{((isset($request->status))==0)?'selected':''}}>Disable</option>
                                         </select>
                                     </th>

                                     <th>
                                         <input type="text" class="form-control" value="{{isset($created_at)?$created_at:''}}"  name="created_at" value="{{old('created_at')}}" placeholder="Added Date">
                                     </th>
                                     <th>
                                         <input type="submit" value="Filter" class="btn btn-sm btn-primary">
                                     </th>
                                 </tr>
                             </form>



                            <tr>
                                <th>

                                </th>
                                <th>
                                    Customer Name
                                </th>
                                <th>
                                   P-number
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    IP Address
                                </th>
                                <th>
                                    Added Date
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                             @if(count($customerData)>0)
                                 @foreach($customerData as $customer)
                                     <tr>
                                         <td class="py-1">
                                             @if($customer->avatar!=null || $customer->avatar!='' )

                                                 <img src="../../images/faces/face1.jpg" alt="image">
                                             @else
                                                 <div style="
    text-align: center;
    color: white;
    height: 40px;
    background: #ca2a26;
    width: 40px;
    border-radius: 100%;
    border: 2px solid #ccc;
">
                                        <span style="
    line-height: 34px;
    text-align: center;
    /* position: absolute; */
    font-weight: 600;
    font-size: 1.2rem;
">{{substr($customer->first_name,0,1)}}</span>
                                                 </div>
                                             @endif
                                         </td>
                                         <td>
                                             {{$customer->first_name . ' ' . $customer->last_name}} <br>
                                             <a href="mailto:{{$customer->email}}">{{$customer->email}}</a>
                                         </td>
                                         <td>
                                             {{$customer->pnumber}}
                                         </td>
                                         <td>
                                             {{$customer->status == 1 ?'Enable':'Disable'}}
                                         </td>
                                         <td>
                                             {{$customer->ip_address}}
                                         </td>
                                         <td>
                                             {{date('Y-m-d', strtotime($customer->created_at))}}
                                         </td>
                                         <td>
                                             <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit {{$customer->first_name . "'s"}} Information"><i class="fa fa-edit"></i></a> |
                                             <a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete {{$customer->first_name . "'s"}} Information"><i class="fa fa-trash"></i></a> |
                                             <a href="{{url('ktm-admin/customer/single').'/'.$customer->id}}"  data-toggle="tooltip" data-placement="bottom" title="View {{$customer->first_name . ' ' . "'s"}} Information"><i class="fa fa-eye"></i></a>

                                         </td>
                                     </tr>
                                 @endforeach
                                 @else
                                 <td colspan="7" style="text-align: center">
                                     <i class="fa fa-exclamation-triangle" style="
    color: #ca2a26;
    font-size: 40px;
    margin-bottom: 10px;
"></i><br>
                                     <span style="
    font-size: 18px;
    margin-top: 10px;
"> No record(s) found</span>
                                 </td>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top: 10px ; float: right" >
                        {{--@if(isset (links()))--}}
                            {{--{{$customerData->links()}}--}}
                            {{--@endif--}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop()
