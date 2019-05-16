 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="{{url('images/faces/face1.jpg')}}" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                        {{\App\Http\adminHelper::getAdminData()->name}}
                </p>
                <p class="designation">
                 Administrator
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('ktm-admin/dashboard')}}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

                  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#manage" aria-expanded="false" aria-controls="design">
              <i class="fa fa-laptop menu-icon"></i>
              <span class="menu-title">Manage</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="manage">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('ktm-admin/manage/homepageslider')}}">Home page Slider</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('ktm-admin/manage/category')}}">Category</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('ktm-admin/manage/discount-voucher')}}">Discount Voucher</a></li>
              </ul>
            </div>
          </li>

            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#staff-information" aria-expanded="false" aria-controls="staff-information">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Staff Information</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="staff-information">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="../layout/boxed-layout.html">Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="../layout/rtl-layout.html">All Staffs</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="../layout/horizontal-menu.html">Add Staff</a></li>
              </ul>
            </div>
          </li>
          

             <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menus" aria-expanded="false" aria-controls="menus">
              <i class="fa fa-hotel menu-icon"></i>
              <span class="menu-title">Menus</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menus">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('ktm-admin/menus')}}">Menu Item List</a></li>

                           <li class="nav-item"> <a class="nav-link" href="{{url('ktm-admin
                           /extra-meal')}}">Extra Meal Item</a></li>
              </ul>
            </div>
          </li>

            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#caterings" aria-expanded="false" aria-controls="caterings">
              <i class="fab fa-hotel menu-icon"></i>
              <span class="menu-title">Caterings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="caterings">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="../layout/boxed-layout.html">Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="../layout/rtl-layout.html">All Catering</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="../layout/horizontal-menu.html">Add Catering</a></li>
              </ul>
            </div>
          </li>


            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sales" aria-expanded="false" aria-controls="sales">
              <i class="fa fa-shopping-cart menu-icon"></i>
              <span class="menu-title">Sales</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sales">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="../layout/boxed-layout.html">Order</a></li>
                <li class="nav-item"> <a class="nav-link" href="../layout/rtl-layout.html">All Catering</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="../layout/horizontal-menu.html">Add Catering</a></li>
              </ul>
            </div>
          </li>


           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#customer" aria-expanded="false" aria-controls="customer">
              <i class="fa fa-user menu-icon"></i>
              <span class="menu-title">Customers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="customer">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('ktm-admin/customers')}}">Customers</a></li>
              </ul>
            </div>
          </li>




           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#system" aria-expanded="false" aria-controls="customer">
              <i class="fa fa-cogs menu-icon"></i>
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="system">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('ktm-admin/setting/order')}}">Order</a></li>
  
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('ktm-admin/setting/general')}}">General</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('ktm-admin/setting/working-time')}}">Working Time</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('ktm-admin/setting/payment-method')}}">Payment Method</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Newsletter" aria-expanded="false" aria-controls="customer">
              <i class="fa fa-newspaper menu-icon"></i>
              <span class="menu-title">Newsletter</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Newsletter">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('ktm-admin/newsletter/subscribers')}}">View Subscribers</a></li>
              </ul>
            </div>
          </li>


            <li class="nav-item">
            <a class="nav-link" href="index-2.html">
              <i class="fa fa-bell menu-icon"></i>
              <span class="menu-title">Notification</span>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- partial -->
