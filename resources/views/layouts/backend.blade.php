<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<!-- //header here -->
    @include('particle.backend.header')
</head>
<body>
<div class="container-scroller">
    <!-- _navbar here -->
@include('particle.backend._navbar')

<div class="container-fluid page-body-wrapper">

<!-- sidenavigation -->
@include('particle.backend._sidenav')


<div class="main-panel">
<div class="content-wrapper">
@yield('ktmspice-backend_admin-content')
</div>
 
@include('particle.backend.footer')
</div>  
</div> 
</div>


<!-- javascript here -->
@include('particle.backend.javascript')
</body>
</html>
