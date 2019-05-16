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
    </style>
    <div class="page-header">
        <h3>
            Profile
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
                        <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">Edit Your Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">Edit Restaurant Address</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                        <form class="forms-sample" method="post" action="{{url('admin/profile/edit')}}">
                            @csrf()
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" value="{{\App\Http\adminHelper::getAdminData()->name}}" class="form-control" name="name" placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" value="{{\App\Http\adminHelper::getAdminData()->email}}" class="form-control" name="email" placeholder="Email Address">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" value="" class="form-control" name="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" value="" class="form-control" name="Cpassword" placeholder="Confirm Password">
                            </div>

                            <button type="submit" style="float: right" class="btn btn-primary mr-2">Save</button>

                        </form>
                    </div>
                    <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" value="{{\App\Http\adminHelper::getAdminData()->name}}" class="form-control" name="name" placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" value="{{\App\Http\adminHelper::getAdminData()->email}}" class="form-control" name="email" placeholder="Email Address">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" value="{{\App\Http\adminHelper::getAdminData()->email}}" class="form-control" name="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" value="{{\App\Http\adminHelper::getAdminData()->email}}" class="form-control" name="Cpassword" placeholder="Confirm Password">
                            </div>

                            <button type="submit" style="float: right" class="btn btn-primary mr-2">Save</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@stop()
