@extends('layouts.app')

@section('ktmspice-admin-content')
    <style>
        .table td img, .jsgrid .jsgrid-table td img{
            border-radius: 0;
            width: 192px;
            height: 80px;
        }
    </style>

    <div class="page-header">
        <h3 class="page-title">
            Newsletter Subscribers List - {{count($newsletterSubList)}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Newsletter</li>
                <li class="breadcrumb-item active" aria-current="page">Subscribers List</li>
            </ol>
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
                        <table class="table">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Subscribed Date </th>
                                <th>Subscriber Email.</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                           @if(count($newsletterSubList)>0)
                               <?php $i=1 ?>
                              @foreach($newsletterSubList as $subcriberData)
                                  <tr >
                                      <td>{{$i}}</td>
                                      <td>{{date('Y F j',strtotime($subcriberData->created_at))}}</td>
                                      <td>{{$subcriberData->email_address}}</td>
                                      <td><label class="badge {{$subcriberData->status==0?'badge-danger':'badge-success'}} badge-pill">{{$subcriberData->status==0?'Not Subscribed':'Subscribed'}}</label></td>
                                      <td><a onclick="return confirm('Would you like to delete this subscriber')" href="{{url('admin/newsletter/subscribers/delete/'.$subcriberData->id)}}">Delete</a></td>
                                  </tr>
                                  <?php $i++ ?>
                                  @endforeach
                               @else
                               <tr>
                                   <td style="text-align: center" colspan="5">No Subscriber Found</td>

                               </tr>
                           @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


@stop()
