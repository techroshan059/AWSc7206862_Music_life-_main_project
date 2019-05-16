@extends('layouts.app')

@section('ktmspice-admin-content')
<div class="page-header">
            <h3 class="page-title">
             {{$discountData->title}}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/manage/discount-voucher')}}">Discount Vourchers List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Single</li>
                <li class="breadcrumb-item active" aria-current="page">{{$discountData->title}}</li>
                </ol>
            </nav>
</div>


<div class="row">
<div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">

                 
                 
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                
                 
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>Product</th>
                          <th>Sale</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="fa fa-arrow-down"></i></td>
                          <td><label class="badge badge-danger badge-pill">Pending</label></td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>Flash</td>
                          <td class="text-danger"> 21.06% <i class="fa fa-arrow-down"></i></td>
                          <td><label class="badge badge-warning badge-pill">In progress</label></td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Premier</td>
                          <td class="text-danger"> 35.00% <i class="fa fa-arrow-down"></i></td>
                          <td><label class="badge badge-info badge-pill">Fixed</label></td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>After effects</td>
                          <td class="text-success"> 82.00% <i class="fa fa-arrow-up"></i></td>
                          <td><label class="badge badge-success badge-pill">Completed</label></td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td class="text-success"> 98.05% <i class="fa fa-arrow-up"></i></td>
                          <td><label class="badge badge-warning badge-pill">In progress</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>

@stop()