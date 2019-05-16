    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        {{--  <a class="navbar-brand brand-logo" href="{{url('ktm-admin')}}"><img src="{{url('images/ktmspice_logo.svg')}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('ktm-admin')}}"><img src="images/logo-mini.svg" alt="logo"/></a>  --}}

        <a href="/" class="site-logo" style="font-size:18px"><strong>Ktm-Spice</strong></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span  style="color: #c82c2d;" class="fas fa-bars"></span>
        </button>
    
        <ul class="navbar-nav navbar-nav-right">
        

        <!-- notification -->
          @include('particle.backend._notification')

          <!-- Message -->
          @include('particle.backend._message')
         
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{url('images/faces/face1.jpg')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{url('admin/setting/profile') }}">
                <i class="fas fa-user text-primary"></i>
                Your Profile
              </a>  <a class="dropdown-item" href="{{url('admin/setting/restaurant') }}">
                <i class="fas fa-building text-primary"></i>
                Restaurant Profile
              </a>

              <div class="dropdown-divider"></div>
              <a href="{{url('auth/ktm-admin/logout')}}"  class="dropdown-item">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
