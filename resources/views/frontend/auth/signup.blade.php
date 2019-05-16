@extends('layouts.frontend.front_layout1')

@section('ktmspice-frontlayout1-content')

<section class="hero banner banner--general">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 style="font-weight: 100;" class="mb-0 mt-2 mt-md-0">Register as new customer</h1>
                </div>
               
            </div>
        </div>
</section>

    <div class="login" style="margin: 50px 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                    <div class="loginnow">
                        <form  method="POST" >

                            @csrf()
            
                            <p style="margin-bottom: 30px;font-size:16px;font-family:Roboto, sans-serif">Fields with <span style="color: darkred">*</span> are required.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span style="color: red">*</span></label>
                                        <input style="border-radius: 0" type="text" value="{{ old('first_name') }}" name="first_name" name="first_name" placeholder="First Name" id="first_name" class="form-control">
                                        
                                        @if ($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('first_name') }}</strong>
        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input style="border-radius: 0" type="text" value="{{ old('last_name') }}" name="last_name" name="last_name" placeholder="Last Name" id="last_name" class="form-control">
                                        @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('last_name') }}</strong>
        </span>
       
                                    @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email Address <span style="color: red">*</span></label>
                                        <input style="border-radius: 0" type="text" value="{{ old('email') }}" name="email"name="email"  placeholder="Email Address" id="email" class="form-control">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
                                    @endif
                                    </div>
                                    </div>
            
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile Number <span style="color: red">*</span></label>
                                        <input style="border-radius: 0" type="text" name="pnumber"value="{{ old('pnumber') }}" placeholder="Mobile Number" id="Mobile Number" class="form-control">
                                        @if ($errors->has('pnumber'))
                                        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('pnumber') }}</strong>
        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password <span style="color: red">* </span></label>
            
                                        <input style="border-radius: 0" type="password" value="{{ old('password') }}" name="password" name="password"  value="" placeholder="Password" class="form-control">
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @else
        <span>
                Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
            </span>
            

                                    @endif
                                    </div>
                                </div>
            
            
                                <div class="col-sm-6">
                                    <div>
                                        <label>Confirm Password <span style="color: red">*</span></label>
                                        <input style="border-radius: 0" type="password" name="confirmed"  placeholder="Confirm Password" id="cpassword" class="form-control">
            
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div>
                                   <input type="checkbox" name="sub_newfeed" class="checkbox" value="yes"> would you like to subscribe to our newsletter
                                    </div>
                                </div>
                            </div>
            
            
                            <span style="font-size: 18px;font-family: initial;">By Signing Up, I agree to Kathmandu Spice’s Terms of Use and Privacy Policy.</span>
                            <input style="font-size: 13px;margin: 23px 0 0;width: 100%;border-radius: 0;height: 40px;max-height: 40px;" type="submit" value="SIGN UP" class="btn btn-primary">
            
                            <hr>
            
                            <div style="text-align: center">
                                <p style="font-size:18px;">Already have an account?<a >Sign In</a></p>
                            </div>
            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop