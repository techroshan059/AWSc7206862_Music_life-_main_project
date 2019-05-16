<template>
    <div class="row">
        <div class="col-md-3 col-4 header__logo">
            <a href="/" class="site-logo"><img alt="ktmspice"></a>
        </div>
        <div v-bind:hidden="$root.authenticated" class="col-md-9 col-8 header__right-menu">
            <ul class="list-inline float-right">
    
    
                <li class="list-inline-item"><a href="signin" class="btn btn--hollow hidden-sm-down">Login</a></li>
                <li class="list-inline-item"><a href="signin" class="btn btn--hollow hidden-md-up hidden-lg-up">Login</a></li>
            </ul>
        </div>
        <div v-show="$root.authenticated" class="col-md-9 col-8 header__right-menu">
            <ul class="list-inline float-right">
                <li class="list-inline-item notify" @click="ShowHideWindow('NOTIFICATIONS')"><span class="icofont icofont-notification"></span></li>
                <li class="list-inline-item notify" title="My Profile" @click="ShowHideWindow('PROFILE')"><span class="icofont icofont-user"></span></li>
                <li class="list-inline-item notify" title="My Bag" @click="ShowHideWindow('BAG')"><span class="icofont icofont-bag"></span><span class="dot" v-show="$root.carts_local.length>0" style=""></span></li>
            </ul>
           
            <div class="header__right-dropdown profile" v-show="getstate('PROFILE')" style="">
                <div class="sidebar-wrapper sidebar-wrapper--outer">
                    <div class="sidebar-wrapper sidebar-wrapper--inner">
    
                        <div class="side-general" style="font-size:90%;">
                            <span class="small-title">My Profile</span>
                            <span class="icofont icofont-close float-right hidden-sm-up close-overlay" @click="hidewindow('PROFILE')"></span>
                            <div class="side-general__profile" onclick="location.href='/manage/index'" style="cursor:pointer;">
    
                                <div class="side-general__avatar">
    
    
                                    <img src="https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=294703017990213&amp;height=50&amp;width=50&amp;ext=1544152529&amp;hash=AeRmmJf_67mK0yiq" alt="" ng-show="134>1" class="">
                                    <img src="/img/user.png" alt="" ng-show="134<1" class="ng-hide">
    
                                </div>
    
                                <span style="margin-top:10px" class="side-general__subinfo">{{$root.customerInfo.first_name + ' '+ $root.customerInfo.last_name}}</span>
    
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
                                    <a @click="logout();" href="javascript:;" class="green">Logout</a>
                                </form>
                            </div>
                        </div>
                    </div>
    
    
    
                </div>
    
            </div>
            <div class="header__right-dropdown cart" v-show="getstate('BAG')" style="">
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
                            <div class="cart__content spinner">
                                <!-- Each restraurant will have their own table - A type of accordion table -->
                                <uib-accordion close-others="true">
                                    <div role="tablist" class="panel-group" ng-transclude="">
    
                                        <!-- ngRepeat: cart in CartItems() track by $index -->
                                        <table uib-accordion-group="" ng-repeat="cart in CartItems() track by $index" class="table cart__restaurant-table ng-scope ng-isolate-scope panel ng-hide" is-open="accordionArray[$index]" ng-show="cart.Items.length>0"
                                            style="">
                                            <div role="tab" id="accordiongroup-34-8414-tab" aria-selected="false" class="panel-heading" ng-keypress="toggleOpen($event)">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="" aria-expanded="false" aria-controls="accordiongroup-34-8414-panel" class="accordion-toggle" ng-click="toggleOpen()" uib-accordion-transclude="heading" ng-disabled="isDisabled" uib-tabindex-toggle=""><span uib-accordion-header="" ng-class="{'text-muted': isDisabled}" class="ng-binding">
    											<div class="cart__restaurant-name ng-scope">
    												<span class="ng-binding">Ageno:</span>
                                                        <span class="green ng-binding">0.00 (0 items)</span>
                                                        <span class="icomoon icon-keyboard-down float-right"></span>
                                            </div>
                                            </span>
                                            </a>
                                            </h4>
                                    </div>
                                    <div id="accordiongroup-34-8414-panel" aria-labelledby="accordiongroup-34-8414-tab" aria-hidden="true" role="tabpanel" class="panel-collapse collapse" uib-collapse="!isOpen" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body" ng-transclude="">
                                            <thead class="ng-scope">
                                                <tr>
                                                    <th colspan="3">
                                                        <uib-accordion-heading></uib-accordion-heading>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="cart__items ng-scope">
    
                                                <!-- ngRepeat: cartItem in cart.Items -->
    
                                                <tr>
                                                    <td colspan="3"><a href="/Restaurant/Details/502" class="green">ADD MORE ITEMS +</a></td>
                                                </tr>
                                            </tbody>
    
                                            <tfoot class="ng-scope">
                                                <!-- ngRepeat: charge in cart.Totals| orderBy:'RowId' -->
    
                                                <tr ng-show="cartloading()" class="ng-hide" style="">
                                                    <td colspan="3">
                                                        <div class="spinner">
                                                            <div class="spinner__loader ng-hide" ng-show="cartloading()" style="">
                                                                <div class="spinner__circle"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Show this message when cart doesn't exceed Rs. 400 -->
    
                                                <tr class="cart__warning" ng-hide="CanCheckOut(cart)  &amp;&amp;  cart.Items.length > 0" style="">
                                                    <td colspan="3" class="ng-binding">
                                                        Subtotal must exceed Rs. 400.00 for delivery orders.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <button class="btn btn-block btn--primary ng-hide" ng-show="(!ReadOnly()) &amp;&amp; (CanCheckOut(cart))" ng-click="CheckOutIfApplicable(cart,cart.Vendor.Id)" style="">
                                                            Proceed to Checkout
                                                        </button>
                                                    </td>
                                                </tr>
                                                <!-- End Message -->
                                            </tfoot>
                                        </div>
                                    </div>
                                    </table>
                                    <!-- end ngRepeat: cart in CartItems() track by $index -->
                                    <table uib-accordion-group="" ng-repeat="cart in CartItems() track by $index" class="table cart__restaurant-table ng-scope ng-isolate-scope panel ng-hide" is-open="accordionArray[$index]" ng-show="cart.Items.length>0" style="">
                                        <div role="tab" id="accordiongroup-36-1513-tab" aria-selected="false" class="panel-heading" ng-keypress="toggleOpen($event)">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" href="" aria-expanded="false" aria-controls="accordiongroup-36-1513-panel" class="accordion-toggle" ng-click="toggleOpen()" uib-accordion-transclude="heading" ng-disabled="isDisabled" uib-tabindex-toggle=""><span uib-accordion-header="" ng-class="{'text-muted': isDisabled}" class="ng-binding">
    											<div class="cart__restaurant-name ng-scope">
    												<span class="ng-binding">Freddo Cafe:</span>
                                                    <span class="green ng-binding">0.00 (0 items)</span>
                                                    <span class="icomoon icon-keyboard-down float-right"></span>
                                        </div>
                                        </span>
                                        </a>
                                        </h4>
                            </div>
                            <div id="accordiongroup-36-1513-panel" aria-labelledby="accordiongroup-36-1513-tab" aria-hidden="true" role="tabpanel" class="panel-collapse collapse" uib-collapse="!isOpen" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body" ng-transclude="">
                                    <thead class="ng-scope">
                                        <tr>
                                            <th colspan="3">
                                                <uib-accordion-heading></uib-accordion-heading>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="cart__items ng-scope">
    
                                        <!-- ngRepeat: cartItem in cart.Items -->
    
                                        <tr>
                                            <td colspan="3"><a href="/Restaurant/Details/550" class="green">ADD MORE ITEMS +</a></td>
                                        </tr>
                                    </tbody>
    
                                    <tfoot class="ng-scope">
                                        <!-- ngRepeat: charge in cart.Totals| orderBy:'RowId' -->
    
                                        <tr ng-show="cartloading()" class="ng-hide" style="">
                                            <td colspan="3">
                                                <div class="spinner">
                                                    <div class="spinner__loader ng-hide" ng-show="cartloading()" style="">
                                                        <div class="spinner__circle"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Show this message when cart doesn't exceed Rs. 400 -->
    
                                        <tr class="cart__warning" ng-hide="CanCheckOut(cart)  &amp;&amp;  cart.Items.length > 0" style="">
                                            <td colspan="3" class="ng-binding">
                                                Subtotal must exceed Rs. 400.00 for delivery orders.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <button class="btn btn-block btn--primary ng-hide" ng-show="(!ReadOnly()) &amp;&amp; (CanCheckOut(cart))" ng-click="CheckOutIfApplicable(cart,cart.Vendor.Id)" style="">
                                                            Proceed to Checkout
                                                        </button>
                                            </td>
                                        </tr>
                                        <!-- End Message -->
                                    </tfoot>
                                </div>
                            </div>
                            </table>
                            <!-- end ngRepeat: cart in CartItems() track by $index -->
                            <table uib-accordion-group="" ng-repeat="cart in CartItems() track by $index" class="table cart__restaurant-table ng-scope ng-isolate-scope panel ng-hide" is-open="accordionArray[$index]" ng-show="cart.Items.length>0" style="">
                                <div role="tab" id="accordiongroup-38-2512-tab" aria-selected="false" class="panel-heading" ng-keypress="toggleOpen($event)">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" href="" aria-expanded="false" aria-controls="accordiongroup-38-2512-panel" class="accordion-toggle" ng-click="toggleOpen()" uib-accordion-transclude="heading" ng-disabled="isDisabled" uib-tabindex-toggle=""><span uib-accordion-header="" ng-class="{'text-muted': isDisabled}" class="ng-binding">
    											<div class="cart__restaurant-name ng-scope">
    												<span class="ng-binding">Valley Xpress - Maharajgunj:</span>
                                            <span class="green ng-binding">0.00 (0 items)</span>
                                            <span class="icomoon icon-keyboard-down float-right"></span>
                                </div>
                                </span>
                                </a>
                                </h4>
                        </div>
                        <div id="accordiongroup-38-2512-panel" aria-labelledby="accordiongroup-38-2512-tab" aria-hidden="true" role="tabpanel" class="panel-collapse collapse" uib-collapse="!isOpen" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body" ng-transclude="">
                                <thead class="ng-scope">
                                    <tr>
                                        <th colspan="3">
                                            <uib-accordion-heading></uib-accordion-heading>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="cart__items ng-scope">
    
                                    <!-- ngRepeat: cartItem in cart.Items -->
    
                                    <tr>
                                        <td colspan="3"><a href="/Restaurant/Details/552" class="green">ADD MORE ITEMS +</a></td>
                                    </tr>
                                </tbody>
    
                                <tfoot class="ng-scope">
                                    <!-- ngRepeat: charge in cart.Totals| orderBy:'RowId' -->
    
                                    <tr ng-show="cartloading()" class="ng-hide" style="">
                                        <td colspan="3">
                                            <div class="spinner">
                                                <div class="spinner__loader ng-hide" ng-show="cartloading()" style="">
                                                    <div class="spinner__circle"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Show this message when cart doesn't exceed Rs. 400 -->
    
                                    <tr class="cart__warning" ng-hide="CanCheckOut(cart)  &amp;&amp;  cart.Items.length > 0" style="">
                                        <td colspan="3" class="ng-binding">
                                            Subtotal must exceed Rs. 400.00 for delivery orders.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <button class="btn btn-block btn--primary ng-hide" ng-show="(!ReadOnly()) &amp;&amp; (CanCheckOut(cart))" ng-click="CheckOutIfApplicable(cart,cart.Vendor.Id)" style="">
                                                            Proceed to Checkout
                                                        </button>
                                        </td>
                                    </tr>
                                    <!-- End Message -->
                                </tfoot>
                            </div>
                        </div>
                        </table>
                        <!-- end ngRepeat: cart in CartItems() track by $index -->
                        <table uib-accordion-group="" ng-repeat="cart in CartItems() track by $index" class="table cart__restaurant-table ng-scope ng-isolate-scope panel ng-hide" is-open="accordionArray[$index]" ng-show="cart.Items.length>0" style="">
                            <div role="tab" id="accordiongroup-40-8604-tab" aria-selected="false" class="panel-heading" ng-keypress="toggleOpen($event)">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" href="" aria-expanded="false" aria-controls="accordiongroup-40-8604-panel" class="accordion-toggle" ng-click="toggleOpen()" uib-accordion-transclude="heading" ng-disabled="isDisabled" uib-tabindex-toggle=""><span uib-accordion-header="" ng-class="{'text-muted': isDisabled}" class="ng-binding">
    											<div class="cart__restaurant-name ng-scope">
    												<span class="ng-binding">Le Mirch:</span>
                                        <span class="green ng-binding">0.00 (0 items)</span>
                                        <span class="icomoon icon-keyboard-down float-right"></span>
                            </div>
                            </span>
                            </a>
                            </h4>
                    </div>
                    <div id="accordiongroup-40-8604-panel" aria-labelledby="accordiongroup-40-8604-tab" aria-hidden="true" role="tabpanel" class="panel-collapse collapse" uib-collapse="!isOpen" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body" ng-transclude="">
                            <thead class="ng-scope">
                                <tr>
                                    <th colspan="3">
                                        <uib-accordion-heading></uib-accordion-heading>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="cart__items ng-scope">
    
                                <!-- ngRepeat: cartItem in cart.Items -->
    
                                <tr>
                                    <td colspan="3"><a href="/Restaurant/Details/558" class="green">ADD MORE ITEMS +</a></td>
                                </tr>
                            </tbody>
    
                            <tfoot class="ng-scope">
                                <!-- ngRepeat: charge in cart.Totals| orderBy:'RowId' -->
    
                                <tr ng-show="cartloading()" class="ng-hide" style="">
                                    <td colspan="3">
                                        <div class="spinner">
                                            <div class="spinner__loader ng-hide" ng-show="cartloading()" style="">
                                                <div class="spinner__circle"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Show this message when cart doesn't exceed Rs. 400 -->
    
                                <tr class="cart__warning" ng-hide="CanCheckOut(cart)  &amp;&amp;  cart.Items.length > 0" style="">
                                    <td colspan="3" class="ng-binding">
                                        Subtotal must exceed Rs. 400.00 for delivery orders.
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button class="btn btn-block btn--primary ng-hide" ng-show="(!ReadOnly()) &amp;&amp; (CanCheckOut(cart))" ng-click="CheckOutIfApplicable(cart,cart.Vendor.Id)" style="">
                                                            Proceed to Checkout
                                                        </button>
                                    </td>
                                </tr>
                                <!-- End Message -->
                            </tfoot>
                        </div>
                    </div>
                    </table>
                    <!-- end ngRepeat: cart in CartItems() track by $index -->
                    <table uib-accordion-group="" ng-repeat="cart in CartItems() track by $index" class="table cart__restaurant-table ng-scope ng-isolate-scope panel panel-open ng-hide" is-open="accordionArray[$index]" ng-show="cart.Items.length>0" style="">
                        <div role="tab" id="accordiongroup-42-8905-tab" aria-selected="true" class="panel-heading" ng-keypress="toggleOpen($event)">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="" aria-expanded="true" aria-controls="accordiongroup-42-8905-panel" class="accordion-toggle" ng-click="toggleOpen()" uib-accordion-transclude="heading" ng-disabled="isDisabled" uib-tabindex-toggle=""><span uib-accordion-header="" ng-class="{'text-muted': isDisabled}" class="ng-binding">
    											<div class="cart__restaurant-name ng-scope">
    												<span class="ng-binding">Diplomat:</span>
                                    <span class="green ng-binding">0.00 (0 items)</span>
                                    <span class="icomoon icon-keyboard-down float-right"></span>
                        </div>
                        </span>
                        </a>
                        </h4>
                </div>
                <div id="accordiongroup-42-8905-panel" aria-labelledby="accordiongroup-42-8905-tab" aria-hidden="false" role="tabpanel" class="panel-collapse in collapse" uib-collapse="!isOpen" aria-expanded="true" style="">
                    <div class="panel-body" ng-transclude="">
                        <thead class="ng-scope">
                            <tr>
                                <th colspan="3">
                                    <uib-accordion-heading></uib-accordion-heading>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="cart__items ng-scope">
    
                            <!-- ngRepeat: cartItem in cart.Items -->
    
                            <tr>
                                <td colspan="3"><a href="/Restaurant/Details/576" class="green">ADD MORE ITEMS +</a></td>
                            </tr>
                        </tbody>
    
                        <tfoot class="ng-scope">
                            <!-- ngRepeat: charge in cart.Totals| orderBy:'RowId' -->
    
                            <tr ng-show="cartloading()" class="ng-hide" style="">
                                <td colspan="3">
                                    <div class="spinner">
                                        <div class="spinner__loader ng-hide" ng-show="cartloading()" style="">
                                            <div class="spinner__circle"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Show this message when cart doesn't exceed Rs. 400 -->
    
                            <tr class="cart__warning" ng-hide="CanCheckOut(cart)  &amp;&amp;  cart.Items.length > 0" style="">
                                <td colspan="3" class="ng-binding">
                                    Subtotal must exceed Rs. 400.00 for delivery orders.
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button class="btn btn-block btn--primary ng-hide" ng-show="(!ReadOnly()) &amp;&amp; (CanCheckOut(cart))" ng-click="CheckOutIfApplicable(cart,cart.Vendor.Id)" style="">
                                                            Proceed to Checkout
                                                        </button>
                                </td>
                            </tr>
                            <!-- End Message -->
                        </tfoot>
                    </div>
                </div>
                </table>
                <!-- end ngRepeat: cart in CartItems() track by $index -->
            </div>
            </uib-accordion>
    
            <div class="spinner__loader ng-hide" ng-show="loading">
                <div class="spinner__circle"></div>
            </div>
        </div>
    
        <p><small class="dim hidden-xs-up">Note: In the event that the restaurant price and the price listed below are different, the restaurant/store price will prevail in every case.</small></p>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    </div>
</template>



<script>
    export default {
        data() {
            return {
    
                showprofile: false,
                showbag: false,
                shownotifications: false,
            }
        },
        mounted() {
    
    
        },
        methods: {
            ShowHideWindow: function(window) {
                switch (window) {
                    case "NOTIFICATIONS":
                        this.showprofile = false;
                        this.showbag = false;
                        this.shownotifications = !this.shownotifications;
                        break;
                    case "PROFILE":
                        this.shownotifications = false;
                        this.showbag = false;
                        this.showprofile = !this.showprofile;
                        break;
                    case "BAG":
                        this.shownotifications = false;
                        this.showprofile = false;
                        this.showbag = !this.showbag;
                        break;
                }
                console.log(this.shownotifications);
            },
            hidewindow: function(window) {
                switch (window) {
                    case "NOTIFICATIONS":
                        this.shownotifications = false;
                        break;
                    case "PROFILE":
                        this.showprofile = false;
                        break;
                    case "BAG":
                        this.showbag = false;
                        break;
                }
            },
    
            getstate: function(window) {
                switch (window) {
                    case "NOTIFICATIONS":
                        return this.shownotifications;
                        break;
                    case "PROFILE":
                        return this.showprofile;
                        break;
                    case "BAG":
                        return this.showbag;
                        break;
                };
                return false;
    
            },
    
            logout: function() {
                localStorage.setItem('setAuthToken', '');
                this.$root.authenticated = false;
            }
    
        }
    }
</script>