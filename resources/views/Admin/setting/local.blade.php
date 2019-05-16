@extends('admin.setting.index')
@section('ktmspice-admin-profile')
    <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
        <form class="forms-sample" method="post" >
            @csrf()
        <input type="text" value="{{$data['id']}}" name="id" hidden>
            <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="country_id">
                    <option value="">Select Country</option>
                    @foreach($countryData as $country)
                        <option {{count( $data)!=0?$data['country_id']==$country->id?'selected':'':''}} value="{{$country->id}}">{{$country->country_name}}</option>
                        @endforeach
                </select>
                @if($errors->has('country_id'))
                    <label class="error" for="country_id">{{$errors->first('country_id')}}</label>
                @endif
            </div>
            <div class="form-group">
                <label>Minimum Order Amount</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">{{count( $data)!=0?$data['currency_symbol']:'$'}}</span>
                    </div>
                    <input name="minimum_order_amount" type="text" step="0.00" value="{{count( $data)!=0?$data['minimum_order_amount']:' '}}" class="form-control" placeholder="Minimum Order Amount">

                </div>
                @if($errors->has('minimum_order_amount'))
                    <label class="error" for="minimum_order_amount">{{$errors->first('minimum_order_amount')}}</label>
                @endif

                    </div>

            <div class="form-group">
                <label>Currency</label>
                <select class="form-control" name="currency_id">
                    <option value="">Select Currency</option>
                    @foreach($currencyData as $currency)
                        <option {{count( $data)!=0?$data['currency_id']==$currency->id?'selected':'':''}} value="{{$currency->id}}">{{$currency->currency . ' (' . $currency->code . ')'}}</option>
                    @endforeach
                </select>
                @if($errors->has('currency_id'))
                    <label class="error" for="currency_id">{{$errors->first('currency_id')}}</label>
                @endif
            </div>



            <button type="submit" style="float: right" class="btn btn-primary mr-2">Save</button>

        </form>
    </div>


@stop()
