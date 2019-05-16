 <div class="container ng-scope">
  
                <div class="row">
                    <div class="col-md-3 col-4 header__logo">
                     
                        <a href="/" class="site-logo" style="font-size:18px"><strong>Ktm-Spice</strong></a>
                    </div>
                  
                  @if(Auth::guard('customer')->check())
                    <div  class="col-md-9 col-8 header__right-menu">
                    <ul class="list-inline float-right">
                        <li class="list-inline-item notify" onclick="showWindow('notifications','profile','cart')" ><span class="icofont icofont-notification"></span></li>
                        <li class="list-inline-item notify" title="My Profile" onclick="showWindow('profile','cart','notifications')" ><span class="icofont icofont-user"></span></li>
                        <li class="list-inline-item notify" title="My Bag" onclick="showWindow('cart','notifications','profile')" ><span class="icofont icofont-bag"></span><span class="dot" v-show="$root.carts_local.length>0" style=""></span></li>
                    </ul>
            
                    <div class="header__right-dropdown notifications hide"  style="">
                        <div class="sidebar-wrapper sidebar-wrapper--outer">
                            <div class="sidebar-wrapper sidebar-wrapper--inner">
                                <div class="side-general">
                                    <div class="side-general__notification">
                                        <h3 class="small-title">No current notifications</h3>
                                        <span class="icofont icofont-close float-right hidden-sm-up close-overlay" onclick="showWindow('notifications','profile','cart')"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
            
                    <div class="header__right-dropdown cart hide"  style="">
                        <div class="sidebar-wrapper sidebar-wrapper--outer">
                            <div class="sidebar-wrapper sidebar-wrapper--inner">
                                <div class="side-general">
                                    <h3 class="small-title">My Bag</h3>
                                    <span class="icofont icofont-close float-right hidden-sm-up close-overlay" @click="hidewindow('BAG')"></span>
                                    <div class="cart cart--empty d-flex justify-content-center align-items-center ng-hide" v-show="$root.carts_local.length>0" style="">
                                        <div class="text-center">
                                            <img class="mb-2" src="/img/cart-empty.png" alt="">
                                            <div>Your bag is empty.</div>
                                            <span class="subtitle">Add items to get started.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="header__right-dropdown profile hide"  style="">
                        <div class="sidebar-wrapper sidebar-wrapper--outer">
                            <div class="sidebar-wrapper sidebar-wrapper--inner">
            
                                <div class="side-general" style="font-size:90%;">
                                    <span class="small-title">My Profile</span>
                                    <span class="icofont icofont-close float-right hidden-sm-up close-overlay" @click="hidewindow('PROFILE')"></span>
                                    <div class="side-general__profile" onclick="location.href='/manage/index'" style="cursor:pointer;">
            
                                        <div class="side-general__avatar">
                                            @if(\App\Http\frontendHelper::getCustomerData()->avatar!='')
                                            <img  src="{{url('frontend/images/customers').'/'.\App\Http\frontendHelper::getCustomerData()->avatar}}" alt="" ng-show="134*1>1" style="height:100px;width:100px;" class="profile__pic rounded-circle mr-3" >
                                        @else
                                             
                                             <img src="{{url('frontend/images/customer-default.png')}}" alt="" ng-show="134*1>1" style="height:100px;width:100px;" class="profile__pic rounded-circle mr-3">
            
                                            {{--<span class="default-img">--}}
                                            {{--<p style="font-weight: 700;line-height: 10rem;text-align: center;color: white;font-size: 30px;">{{substr(\App\Http\frontendHelper::getCustomerData()->first_name,0,1) . substr(\App\Http\frontendHelper::getCustomerData()->last_name,0,1) }}</p>--}}
                                            {{--</span>--}}
                                             @endif()
                                            
                                          
            
                                        </div>
            
                                        <span style="margin-top:10px" class="side-general__subinfo">{{ \App\Http\frontendHelper::getCustomerData()->first_name . ' ' . \App\Http\frontendHelper::getCustomerData()->last_name }}</span>
            
                                        <span><a href="/manage/index" class="edit green">Edit Profile</a></span>
            
                                    </div>
                                    <hr>
                                    <div class="profile__nav" style="border-right:none !important;">
                                        <ul class="nav flex-md-column flex-row" style="">
            
                                            <li><a href="/manage/orders"><span class="icofont icofont-shopping-cart"></span> <span class="profile__links">Order History</span></a> </li>
                                            <li><a href="/manage/locations"><span class="icofont icofont-map"></span> <span class="profile__links">Saved Addresses</span></a></li>
                                        </ul>
                                        <!-- .profile__nav -->
                                    </div>
            
                                    <div style="border-top:1px solid #E7E7E7;text-align:center;padding:10px 0;">
                                        <form action="/logout" id="logoutForm" method="post" class="ng-pristine ng-valid">
                                            <input name="__RequestVerificationToken" type="hidden" value="IWoSJkw4CYryiWUtOFCiCWgZhk0YYac0HfdA2xPY0_6v5JEsdxfxMJdThfz4JuyStF_dFJ-ViYtsjQxHb7LkwI0oErlAjoCnLkKwkoZblLJvJaHiNO6r-xPdObd3JHRcUgg3WLBtb0ISKmWrtsh-bQ2" autocomplete="off">
                                            <a href="{{ url('/logout') }}" class="green">Logout</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
            
            
            
                        </div>
            
                    </div>
               
            
                    
                
                </div>
                  @else
                    <div  class="col-md-9 col-8 header__right-menu">
                        <ul class="list-inline float-right">
                            <li class="list-inline-item"><a href="signin" class="btn btn--hollow hidden-sm-down">Login</a></li>
                            <li class="list-inline-item"><a href="signin" class="btn btn--hollow hidden-md-up hidden-lg-up">Login</a></li>
                        </ul>
                    </div>
                    @endif
                  
            
                    
            
            
                </div>
            </div>



