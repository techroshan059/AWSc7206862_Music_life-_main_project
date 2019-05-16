

<!DOCTYPE html>
<html lang="en">

<head>
 @include('particle.backend.header')
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                  <a href="/" class="site-logo" style="font-size:18px">    <img src="../../images/ktmspice_logo.svg" alt="logo"></a>
            
              </div>
              <h4>Hello Admin! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('admin.login') }}">
                        @csrf
                <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
@if ($errors->has('email'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
                </div>
                <div class="form-group">
                <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                   </div>
                <div class="mt-3">
                  
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                    {{ __('Login') }}
                                </button>
                </div>

                  <a href="{{url('/')}}">Back to website</a>
                {{--<div class="my-2 d-flex justify-content-between align-items-center">--}}
                  {{--<div class="form-check">--}}
                    {{--<label class="form-check-label text-muted">--}}
                      {{--<input type="checkbox"  class="form-check-input" >--}}
                      {{--Keep me signed in--}}
                    {{--</label>--}}
                  {{--</div>--}}
                  {{--<a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>--}}
                {{--</div>--}}
             
               
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
    @include('particle.backend.javascript')
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 03:30:36 GMT -->
</html>





