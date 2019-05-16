@extends('layouts.app')

@section('ktmspice-admin-content')


<div class="page-header">
        <h3 class="page-title">
            Customer Profile
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('ktm-admin/customers')}}">Customer List</a></li>
                <li class="breadcrumb-item" aria-current="page">profile</li>
                <li class="breadcrumb-item active" aria-current="page">{{$signleCustomerData->first_name .' '. $signleCustomerData->last_name}}</li>
            </ol>
        </nav>
</div>

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <img src="{{url('/images/faces/defaultCustomerPicture.jpg')}}" class="img-lg rounded" alt="profile image">
                    <div class="ml-3">
                        <h5>{{$signleCustomerData->first_name .' '. $signleCustomerData->last_name}} </h5>

                        <p class="text-muted"><i class="fa fa-envelope"></i> {{$signleCustomerData->email}}</p>
                        <p class="text-primary font-weight-bold" style="margin-top: -9px;"><i class="fa fa-phone"></i> {{$signleCustomerData->pnumber}}</p>
                        <p class="text-primary font-weight-bold" style="margin-top: -9px;"><a href=""><i class="fa fa-edit"></i> Edit {{$signleCustomerData->first_name .' '. $signleCustomerData->last_name}} Profile </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-0">Statistics</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-block pt-3">
                        <div class="d-md-flex">
                            <h2 class="mb-0">$10,200</h2>

                        </div>
                        <small class="text-gray">Raised from 89 completed orders</small>
                    </div>
                    <div class="d-inline-block">
                        <i class="fas fa-chart-pie text-info icon-lg"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="text-align: center">
                <div class="d-md-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center mb-3 mb-md-0">

                        <div class="ml-4" >
                            <h5 class="mb-0">Completed Order(s)</h5>
                            <p class="mb-0" style="
    font-size: 25px;
    font-weight: 600;
    margin-top: 11px;
">0</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-md-0">

                        <div class="ml-4">
                            <h5 class="mb-0">Pending Order(s)</h5>
                            <p class="mb-0" style="
    font-size: 25px;
    font-weight: 600;
    margin-top: 11px;
">0</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-md-0">

                        <div class="ml-4">
                            <h5 class="mb-0">Canceled Order(s)</h5>
                            <p class="mb-0" style="
    font-size: 25px;
    font-weight: 600;
    margin-top: 11px;
">0</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card" style="border-radius: 0; border: none">
            <div class="card-body" style="    padding: 0">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="orderhistory-tab" data-toggle="tab" href="#orderhistory-1" role="tab" aria-controls="orderhistory-1" aria-selected="true">Order History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="customeraddress-tab" data-toggle="tab" href="#customeraddress-1" role="tab" aria-controls="customeraddress-1" aria-selected="false">{{$signleCustomerData->first_name .' '. $signleCustomerData->last_name}}'s Address</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="orderhistory-1" role="tabpanel" aria-labelledby="orderhistory-tab">
                    <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                              Order Date
                          </th>
                          <th>
                            Order Id
                          </th>
                          <th>
                            Address
                          </th>
                           <th>
                               Order Option
                           </th>
                            <th>
                                Total Amount
                            </th>
                            <th>Status</th>
                            <th>
                                Action
                            </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>
                                2012-11-11
                            </td>
                          <td class="py-1">
                              #2012
                          </td>
                          <td>
                              379 South ..
                          </td>
                           <td>
                               Delivery

                           </td>
                            <td>
                                30.11
                            </td>
                            <td>
                                <label class="badge badge-success badge-pill">Completed</label>
                            </td>
                            <td>
                                <a href="{{url('ktm-admin/sales/invoice/1')}}" >View Bill</a>

                            </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                    </div>
                    <div class="tab-pane fade" id="customeraddress-1" role="tabpanel" aria-labelledby="customeraddress-tab">
                        <div class="media">
                            <img class="mr-3 w-25 rounded" src="../../images/faces/face12.jpg" alt="sample image">
                            <div class="media-body">
                                <h4 class="mt-0">John Doe</h4>
                                <p>
                                    Fail most room even gone her end like. Comparison dissimilar unpleasant six compliment two unpleasing
                                    any add. Ashamed my company thought wishing colonel it prevent he in. Pretended residence are something
                                    far engrossed old off.
                                </p>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
















</div>




@stop()
