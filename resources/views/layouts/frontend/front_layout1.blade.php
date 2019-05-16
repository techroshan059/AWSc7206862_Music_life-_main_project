<!DOCTYPE html>
<!DOCTYPE>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- //header here -->
 
    @include('particle.frontend.header')

   
</head>
<body>

      
    @if(Auth::guard('customer')->check())
    <input type="text" name="csrf_token" id="csrf_token" hidden value="{{ 'dfresAse'.\App\Http\frontendHelper::getCustomerData()->id.csrf_token() }} ">
    @endif()

    <div id="app">
    @include('particle.frontend.nav_bar')
    @yield('ktmspice-frontlayout1-content') 
    @include('particle.frontend.footer')
    </div>
    @include('particle.frontend.javascript') 


<!-- javascript here -->

</body>
</html>
