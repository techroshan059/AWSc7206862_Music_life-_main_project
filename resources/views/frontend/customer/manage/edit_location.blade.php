@extends('frontend.customer.manage')

@section('frontend_customer_manage')




<div class="row">
    <div class="col-md-12">
        <a href="{{ url('/manage/locations') }}">Saved Locations</a> >
        <h3 class="small-title">Edit Location</h3>

        <hr>


        <form method="POST">
            @csrf()
            <fieldset>
                <div class="row">


                    <div class="form-group col-12" style="">
                        <label>Delivery Location <span class="red">*</span></label>
                        <input type="text" value="{{ $getCustAddressData->delivery_location }}" name="delivery_location" placeholder="Enter Title e.g. Kalanki, Kathmandu, Nepal" class="form-control"
                            style="">
                        @if ($errors->has('delivery_location'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('delivery_location') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-12" style="">
                        <label>Address Title <span class="red">*</span></label>
                        <input type="text" value="{{ $getCustAddressData->address_title }}" name="address_title" class="form-control"
                            placeholder="Enter Title e.g. Home, Office" style="">
                        @if ($errors->has('delivery_location'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('delivery_location') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6" style="">
                        <label>First Name <span class="red">*</span></label>
                        <input type="text" value="{{ $getCustAddressData->first_name }}" class="form-control "
                            name="first_name" placeholder="Your First Name">
                        @if ($errors->has('first_name'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('first_name') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Last Name <span class="red">*</span></label>
                        <input type="text" value="{{ $getCustAddressData->last_name }}" class="form-control "
                            placeholder="Your Last Name" name="last_name">
                        @if ($errors->has('last_name'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('last_name') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-12">
                        <label>Organization</label>
                        <input type="text" value="{{ $getCustAddressData->organization }}" class="form-control "
                            name="organization" placeholder="Enter Organization Name">
                    </div>
                    <div class="form-group col-sm-12" style="">
                        <label>Detail Address Direction <span class="red">*</span></label>
                        <textarea class="form-control" name="detail_address_direction" placeholder="Enter Detail Address Direction">{{ $getCustAddressData->detail_address_direction }}</textarea>
                        @if ($errors->has('detail_address_direction'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('detail_address_direction') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Mobile Number <span class="red">*</span></label>
                        <div class="input-group">
                            <span class="input-group-addon">+977</span> <input value="{{ $getCustAddressData->mobile_number }}"
                                type="text" min="0" class="form-control"
                                name="mobile_number" placeholder="XXXXXXXXXX">
                         
                        </div>
                        @if ($errors->has('mobile_number'))
                        <span class="invalid-feedback" role="alert">
                            {{ $errors->first('mobile_number') }}
                        </span>
                        @endif

                    </div>
                    <div class="form-group col-sm-6">
                        <label>Alternate Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-addon">+977</span> <input type="text" min="0" class="form-control" value="{{ $getCustAddressData->alt_phone_number }}"
                               name="alt_phone_number" placeholder="XXXXXXXXXX">
                        </div>

                    </div>
                    <div class="col-sm-12" style="">
                        <input type="checkbox" id="set_as_default" name="set_as_default" {{  $getCustAddressData->set_as_default==1 ?'checked':'' }}  value="true" class="">
                        <label for="set_as_default">
                            <span>Set As Default Address</span>
                        </label>

                    </div>


                    <div class="col-sm-12">
                        <input type="submit" style="float:right" class="btn btn--primary" value="Submit New Address">
                        <a href="{{ url('manage/locations') }}" class="btn btn--cancel ml-3">Cancel</a>
                    </div>

                </div>
            </fieldset>
    </div>
</div>


@stop()
