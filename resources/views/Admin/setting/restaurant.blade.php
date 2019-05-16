@extends('admin.setting.index')
@section('ktmspice-admin-profile')
    <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
       @if(count($data)>0)
            <form class="forms-sample" method="post">
                @csrf()
                <div class="form-group">
                    <label>Restaurant name</label>
                    <input type="text"value="{{$data['restaurant_name']}}" class="form-control" name="restaurant_name" placeholder="Restaurant Name">
                    @if($errors->has('restaurant_name'))
                        <label class="error" for="restaurant_name">{{$errors->first('restaurant_name')}}</label>
                    @endif

                </div>

                <div class="form-group">
                    <label>Restaurant Owner</label>
                    <input type="text" value="{{$data['restaurant_owner']}}" class="form-control" name="restaurant_owner" placeholder="Restaurant Owner">
                    @if($errors->has('restaurant_owner'))
                        <label class="error" for="restaurant_owner">{{$errors->first('restaurant_owner')}}</label>
                    @endif

                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" value="{{$data['address']}}" class="form-control" name="address" placeholder="Address">
                    @if($errors->has('address'))
                        <label class="error" for="address">{{$errors->first('address')}}</label>
                    @endif

                </div>

                {{--<div class="form-group">--}}
                {{--<label>Geocode</label>--}}
                {{--<input type="text" value="" class="form-control" name="password" placeholder="Geocode">--}}
                {{--</div>--}}

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" value="{{$data['email_address']}}" class="form-control" name="email_address" placeholder="Email Address">
                    @if($errors->has('email_address'))
                        <label class="error" for="email_address">{{$errors->first('email_address')}}</label>
                    @endif

                </div>

                <div class="form-group">
                    <label>Telephone</label>
                    <input type="text" value="{{$data['telephone']}}" class="form-control" name="telephone" placeholder="Telephone">
                    @if($errors->has('telephone'))
                        <label class="error" for="telephone">{{$errors->first('telephone')}}</label>
                    @endif

                </div>

                <input type="text" hidden name="id" value="{{$data['id']}}">

                <button type="submit" style="float: right" class="btn btn-primary mr-2">Save</button>

            </form>

           @else
            <div class="text-center">
                <span>No Data found </span>
            </div>
        @endif
    </div>

@stop()
