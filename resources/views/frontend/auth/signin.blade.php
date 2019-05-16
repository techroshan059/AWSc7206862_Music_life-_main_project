@extends('layouts.frontend.front_layout1')

@section('ktmspice-frontlayout1-content')

<section class="hero banner banner--general">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 style="font-weight: 100;" class="mb-0 mt-2 mt-md-0">Sign In</h1>
                </div>
               
            </div>
        </div>
</section>

    <div class="login" style="margin: 50px 0px">
        <div class="container">
            <div class="row">


        
                    {{--  <loginform></loginform>  --}}
          

                <div class="col-sm-12 col-lg-6 col-md-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                    @if(Session::has('successMessage'))
                        <div class="alert {{ Session::get('alert-class', 'alert-success') }} alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            {{ Session::get('successMessage') }}
                        </div>
                    @endif
                    <div class="loginnow">
                        <form method="POST" action="{{ route('customer.login') }}" aria-label="{{ __('admin.login') }}">
                            @csrf()
                            <div class="form-group">
                                <label>EMAIL</label>
                                <input style="border-radius: 0" type="text" name="email" value="{{old('email')}}" placeholder="email" id="email" class="form-control">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input style="border-radius: 0" type="password" name="password" value="{{old('password')}}" placeholder="password" id="input-password" class="form-control">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
                                @endif
                            </div>
                            <div class="links">
                                <input style="border-radius: 0" type="checkbox" class="radio-inline">Remember Me
                            </div>
                            <input style="font-size: 13px;margin: 23px 0 0;width: 100%;border-radius: 0;height: 40px;max-height: 40px;" type="submit" value="SIGN IN" class="btn btn-primary">

                            <hr>

                            <div style="text-align: center">
                                <p style="font-size:18px" >Do not have an account? <a href="{{url('signup')}}">Sign Up</a></p>
                                <p ><a href="#">Forgot Password?</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop