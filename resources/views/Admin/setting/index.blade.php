@extends('layouts.app')

@section('ktmspice-admin-content')
    <style>
        .form-control{
            padding: 10px;
        }
        .card{
            border-radius: 0px;
            border: 0;

        }
        .card .card-body{
            padding: 0;
        }
        .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
            background: #f6f8fa;
            border-bottom: 2px solid #076c93;
        }
        .nav-tabs .nav-link {

            border:0;

        }
        .tab-content{
            border:none;
        }
        .error{
            color: #c82c2d;
        }
    </style>
    <div class="page-header">
        <h3>
            {{Request::segment(3)=='profile'?'Profile':''}}
            {{Request::segment(3)=='restaurant'?'Restaurant':''}}
            {{Request::segment(3)=='local'?'Local':''}}
            {{Request::segment(3)=='working-times'?'Working Times':''}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
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

        <div class="col-md-12 grid-margin stretch-card">

            <div class="card clearfix" >
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(3)=='profile'?'active show':'' }}" href="{{url('admin/setting/profile')}}" >Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(3)=='restaurant'?'active show':'' }}" href="{{url('admin/setting/restaurant')}}" >Restaurant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(3)=='local'?'active show':'' }}" href="{{url('admin/setting/local')}}" >Local</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(3)=='working-times'?'active show':'' }}" href="{{url('admin/setting/working-times')}}" >Working Times</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        @yield('ktmspice-admin-profile')
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop()
