@extends('layouts.frontend.front_layout1')

@section('ktmspice-frontlayout1-content')

<section class="hero banner banner--general">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 style="font-weight: 100;" class="mb-0 mt-2 mt-md-0">Checkout</h1>
            </div>

        </div>
    </div>
</section>

<div class="restaurant-front spinner">
    <div class="container">
        <div class="row" v-if="this.$root.subTotalAmountCart<this.$root.min_order">
            <div class="col-md-8 col-lg-9">
                <h2 class="small-title">OOPS!</h2>
                <p class="font-color-black"><small>You have not meet the minimum requirement to order from this vendor.
                        To add more items, click “Go Back’ button.</small></p>
            </div>
        </div>

        <div class="row" v-else>
            <div class="col-md-8 col-lg-9">
                

                @if(count($CustAddressData)>0)
                    <div class="card mb-3">
                        <div class="card-header red">DELIVERY ADDRESS</div>
                        <div class="card-block">
                            <div class="row">
                                @foreach ($CustAddressData as $CustAddressItem)
                                <div class="col-lg-6 ng-scope" style="">
                                    <div class="checkout-address">
                                        <label>
    
                                            <span class="d-block ng-binding" style="text-transform:uppercase;">
    
                                                <input type="radio" name="set_as_default" id="set_as_default"
                                                    {{ $CustAddressItem->set_as_default==1?'checked':'' }}>
                                                {{ $CustAddressItem->address_title }}</span>
                                            <span class="d-block ng-binding">{{ $CustAddressItem->first_name .'
                                                '.$CustAddressItem->last_name }}</span>
                                            <span class="d-block ng-binding">{{ $CustAddressItem->delivery_location }}</span>
                                            <span class="d-block ng-binding">{{ $CustAddressItem->detail_address_direction
                                                }}</span>
                                            <span class="d-block ng-binding">Phone: {{ $CustAddressItem->mobile_number }}
                                                {{ $CustAddressItem->alt_phone_number!=null?',':'' }} {{
                                                $CustAddressItem->alt_phone_number }}</span></span>
                                        </label>
                                        {{-- <div class="ml-auto">
                                            <a href="#deletePop" data-toggle="modal" data-target="#deletePop" @click="deletePop($CustAddressItem->->id,$CustAddressItem->->address_title)"><span
                                                    class="icofont icofont-delete-alt" title="Remove Address"></span></a>
                                            <a href="javascript:;" ng-click="OpenAddressUpdateDialog(uAdd)"><span class="icofont icofont-edit-alt"
                                                    title="Update Address"></span></a>
                                        </div> --}}
                                        <!-- Clicking on this edit button will bring the modal popup from /add-address.html but with these field pre-populated. -->
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-lg-6" ng-hide="isAdmin">
                                    <div class="checkout-address align-items-center checkout-address--add-new-da">
                                       <div class="mr-2">
                                          <span class="icofont icofont-plus"></span>
                                       </div>
                                     <a href="{{ url('/manage/locations/new-delivery-location') }}"> <span class="green" style="font-size: 14px;">Add New Delivery Address</span></a>
                                      </div>
                                 </div>
                            </div>
                        </div>
                    </div>

                    @else

                    <p class="page-notifications page-notifications--warning">
                        <span class="icofont icofont-exclamation icomoon--orange mr-2"></span>Your address is incomplete or
                        missing. Please add or edit before continue.
                    </p>

                @endif

                
                
               
                <div class="card mb-3">
                    <div class="card-header red"> DELIVERY DATE AND TIME</div>
                    <div class="card-block">
                        <form class="form form--primary ng-pristine ng-valid">
                            <div class="row">
                                <div class="col-md-12 ng-hide" ng-show="asapAllowed">
                                    <p><input id="delivery_1" name="deliverydt" ng-model="order.DeliveryOption" type="radio"
                                            value="ASAP" checked="" class="ng-pristine ng-untouched ng-valid ng-not-empty"><label
                                            for="delivery_1" class="label--radio ml-2">As soon as possible</label></p>
                                </div>
                                <div class="col-md-12">
                                    <p><input id="delivery_2" name="deliverydt" ng-model="order.DeliveryOption" type="radio"
                                            value="DateTime" class="ng-pristine ng-untouched ng-valid ng-not-empty"><label
                                            for="delivery_2" class="label--radio ml-2">Schedule Delivery For Later
                                            Date/Time</label></p>
                                </div>
                                <div class="col-md-6" ng-hide="order.DeliveryOption=='ASAP'">
                                    <p>
                                        <label for="date">Date</label>

                                        <select class="form-control select select--full-width ng-pristine ng-untouched ng-valid ng-not-empty"
                                            ng-change="PopulateTime()" ng-options="time.Value as time.Name for time in AvailableDates"
                                            ng-model="order.DelDate" ng-disabled="(order.DeliveryOption=='ASAP')">
                                            <option label="TOMORROW Sunday, November 4, 2018" value="string:2018-11-04"
                                                selected="selected">TOMORROW Sunday, November 4, 2018</option>
                                            <option label="Monday, November 5, 2018" value="string:2018-11-05">Monday,
                                                November 5, 2018</option>
                                            <option label="Tuesday, November 6, 2018" value="string:2018-11-06">Tuesday,
                                                November 6, 2018</option>
                                            <option label="Wednesday, November 7, 2018" value="string:2018-11-07">Wednesday,
                                                November 7, 2018</option>
                                            <option label="Thursday, November 8, 2018" value="string:2018-11-08">Thursday,
                                                November 8, 2018</option>
                                            <option label="Friday, November 9, 2018" value="string:2018-11-09">Friday,
                                                November 9, 2018</option>
                                        </select>
                                    </p>


                                </div>
                                <div class="col-md-6 select-dropdown" ng-hide="order.DeliveryOption=='ASAP'">

                                    <label for="phone_number_1">Time<span><img src="/img/fmloading.gif" ng-show="delDt.timeload"
                                                class="ng-hide" style=""> </span> </label>
                                    <select ng-disabled="delDt.timeload||order.DeliveryOption=='ASAP'" class="form-control select select--full-width ng-pristine ng-untouched ng-valid ng-empty"
                                        ng-options="time.Value as time.Name for time in order.TimeIntervals" ng-model="order.DelTime">
                                        <option value="" class="" selected="selected">--Select--</option>
                                    </select>

                                    <br>


                                </div>
                                <div class="col-md-12">
                                    <span class="note">Note: Foodmandu Delivery Hours is from 12:00 PM to 9:00 PM</span>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header red"> SPECIAL INSTRUCTIONS</div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-12">


                                <textarea class="form-control ng-pristine ng-valid ng-empty ng-touched" ng-model="order.OrderNote"
                                    placeholder="Please mention if there are special instruction for the delivery person. (eg. Beware of Dogs)"
                                    style=""></textarea>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="cart__warning ng-hide" ng-hide="CanCheckOut()  &amp;&amp;  CartByVendor().Items.length > 0"
                    style="">
                    <div>Total does not meet minimum requirement for delivery orders.Please go back and add more items.</div>

                </div>
                <div>
                    <a href="/Restaurant/Details/423" class="btn btn--cancel">Go Back</a>
                    <button type="button" ng-show="CanCheckOut()  &amp;&amp;  CartByVendor().Items.length > 0" class="btn btn--primary"
                        style="float: right;" ng-disabled="!CanCheckOut()&amp;&amp;CartByVendor().Items.length < 1"
                        ng-click="Validate();">Continue</button>

                </div>
            </div>
            <itemcart></itemcart>

        </div>
    </div>
</div>

@stop