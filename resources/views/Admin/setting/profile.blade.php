@extends('admin.setting.index')
@section('ktmspice-admin-profile')
    <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
        <form class="forms-sample" method="post" >
            @csrf()
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" value="{{\App\Http\adminHelper::getAdminData()->name}}" class="form-control" name="name" placeholder="Full Name">
                @if($errors->has('name'))
                    <label id="name-error" class="error" for="name">{{$errors->first('name')}}</label>
                @endif
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" value="{{\App\Http\adminHelper::getAdminData()->email}}" class="form-control" name="email" placeholder="Email Address">
                @if($errors->has('email'))
                    <label class="error" for="email">{{$errors->first('email')}}</label>
                @endif
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" value="" class="form-control" name="password" placeholder="Password">
                @if($errors->has('password'))
                    <label class="error" for="password">{{$errors->first('password')}}</label>
                @endif
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" value="" class="form-control" name="Cpassword" placeholder="Confirm Password">
                @if($errors->has('Cpassword'))
                    <label class="error" for="Cpassword">{{$errors->first('Cpassword')}}</label>
                @endif
            </div>

            <button type="submit" style="float: right" class="btn btn-primary mr-2">Save</button>

        </form>
    </div>
    {{--<div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">--}}
        {{--<form class="forms-sample">--}}
            {{--<div class="form-group">--}}
                {{--<label>Full Name</label>--}}
                {{--<input type="text" value="{{\App\Http\adminHelper::getAdminData()->name}}" class="form-control" name="name" placeholder="Full Name">--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label>Email Address</label>--}}
                {{--<input type="email" value="{{\App\Http\adminHelper::getAdminData()->email}}" class="form-control" name="email" placeholder="Email Address">--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label>Password</label>--}}
                {{--<input type="password" value="{{\App\Http\adminHelper::getAdminData()->email}}" class="form-control" name="password" placeholder="Password">--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<label>Confirm Password</label>--}}
                {{--<input type="password" value="{{\App\Http\adminHelper::getAdminData()->email}}" class="form-control" name="Cpassword" placeholder="Confirm Password">--}}
            {{--</div>--}}

            {{--<button type="submit" style="float: right" class="btn btn-primary mr-2">Save</button>--}}

        {{--</form>--}}
    {{--</div>--}}

@stop()
