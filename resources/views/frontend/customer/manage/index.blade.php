@extends('frontend.customer.manage')

@section('frontend_customer_manage')
<form enctype="multipart/form-data" class="form" method="POST" action="{{ route('manage.profile.update') }}" aria-label="{{ __('manage.profile.update') }}">
    @csrf()
    <div class="row">
        <div class="col-md-12 mb-3">
            <p><label style="font-size: 1rem; color: #212121">Profile Picture</label></p>
            <div class="d-flex align-items-center">



                <ul style="list-style: none;padding: 0;display: flex;">
                    <li>
                        <div class="profile__pic">
                            @if(\App\Http\frontendHelper::getCustomerData()->avatar!='')
                            <img src="{{url('frontend/images/customers').'/'.\App\Http\frontendHelper::getCustomerData()->avatar}}"
                                alt="{{ App\Http\frontendHelper::getCustomerData()->first_name.'_'.App\Http\frontendHelper::getCustomerData()->last_name }}"
                                style="padding: 4px;border: 2px dotted #ccc;height:100px;width:100px;" class="profile__pic rounded-circle mr-3"
                                id="previewImage">
                            @else

                            <img src="{{url('frontend/images/customer-default.png')}}" alt="customer-default-image"
                                style="padding: 4px;border: 2px dotted #ccc;height:100px;width:100px;" class="profile__pic rounded-circle mr-3"
                                id="previewImage">


                            @endif()

                        </div>
                    </li>

                    <li style="line-height: 100px;padding-left: 5px;">
                        <input onchange="readURL(this)" style="display: none" type="file" id="upload-profile-image"
                            name="avatar" />
                        <label for="upload-profile-image" class="profile-image-label">Change Picture</label>
                    </li>
                </ul>


                <!-- Use this when user uploads an image  -->



            </div>

        </div>
        <div class="col-md-6 mb-3">
            <p>
                <label for="first_name" style="color: #2b2b2b;font-size: 1.2rem;font-weight: 600">FirstName</label>
                <input type="text" value="{{\App\Http\frontendHelper::getCustomerData()->first_name}}" name="first_name"
                    class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" required=""
                    ng-model="ProfileInfo.FirstName" name="name" placeholder="">
                @if ($errors->has('first_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
                @endif
            </p>
        </div>
        <div class="col-md-6 mb-3">
            <p>
                <label for="last_name" style="color: #2b2b2b;font-size: 1.2rem;font-weight: 600">LastName</label>
                <input type="text" name="last_name" value="{{\App\Http\frontendHelper::getCustomerData()->last_name}}"
                    class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" required=""
                    ng-model="ProfileInfo.LastName" name="lname">
                @if ($errors->has('last_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
                @endif
            </p>
        </div>
        <div class="col-md-6 mb-3">
            <p>
                <label for="pnumber" style="color: #2b2b2b;font-size: 1.2rem;font-weight: 600">Phone Number</label>
                <input type="text" name="pnumber" value="{{\App\Http\frontendHelper::getCustomerData()->pnumber}}"
                    class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" required=""
                    name="phone_number_1" ng-model="ProfileInfo.PhoneNumber" placeholder="">
                @if ($errors->has('pnumber'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('pnumber') }}</strong>
                </span>
                @endif
            </p>
        </div>
        <div class="col-md-6 mb-3">
            <p>
                <label for="email" style="color: #2b2b2b;font-size: 1.2rem;font-weight: 600">EMAIL</label>
                <input type="text" name="email" value="{{\App\Http\frontendHelper::getCustomerData()->email}}" class="form-control ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required"
                    required="" name="email" readonly="" placeholder="" ng-model="ProfileInfo.Email">
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </p>
        </div>
        <div class="col-md-12 mb-3">
            <p style="
    float: right;
">
                <button type="submit" class="btn btn--primary">Save</button>
                <button type="button" class="btn btn--cancel ml-3">Cancel</button>
            </p>
        </div>
    </div>
</form>
@stop()