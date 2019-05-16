@extends('layouts.frontend.front_layout1')

@section('ktmspice-frontlayout1-content')
   
    <section class="hero banner banner--general">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h1 style="font-weight: 100;" class="mb-0 mt-2 mt-md-0">Account Settings</h1>
                    </div>
                    <div class="col-4">

                        <a href="{{ url('/logout') }}"class="btn btn--primary btn--logout float-right mt-0 mt-sm-3 mt-md-2" >Logout</a>
		</div>
                </div>
            </div>
        </section>


  <section class="profile">
        <div class="container main-space">

                <div class="row">
                    <div class="col-md-3 profile__nav sidebar-nav">
                        <ul class="nav flex-md-column flex-row">
                            <li><a  class="active" href="{{url('/manage/index')}}"><i class="icofont icofont-user"></i> <span class="profile__links">My Profile</span></a></li>
                            <li><a href="{{url('/manage/changepassword')}}"><i class="icofont icofont-lock"></i> <span class="profile__links">Password</span></a></li>
        
                            <li><a href="{{url('/manage/orders')}}"><i class="icofont icofont-shopping-cart"></i> <span class="profile__links">Order History</span></a></li>
                            <li><a href="{{url('/manage/locations')}}"><i class="icofont icofont-pin"></i> <span class="profile__links">Saved Addressess</span></a></li>
        
                        </ul>
                    </div>
                    <div class="col-md-8">
                        @if(Session::has('successMessage'))
                            <div class="alert {{ Session::get('alert-class', 'alert-success') }} alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                                {{ Session::get('successMessage') }}
                            </div>
                        @endif
                        @yield('frontend_customer_manage')
                    </div>
                </div>
            </div>
  </section>



 


@stop