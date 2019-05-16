@extends('layouts.app') @section('ktmspice-admin-content')

<div class="page-header">
    <h3>Working time</h3>
</div>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form class="forms-sample" method="POST">
                @csrf()
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="m-b-md">
                                <h5 class="no-margins">Working Time / Pickup</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Day of week</th>
                                            <th>Is day off</th>
                                            <th>Start time</th>
                                            <th>End time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-day="monday" data-type="pickup">
                                            <td>Monday</td>
                                            <td class="text-center">
                                                <div class="icheckbox_square-green" style="position: relative;">
                                                    <input type="checkbox" {{ isset($workingtimeData->p_monday_dayoff)?$workingtimeData->p_monday_dayoff=='T'?'checked':'':''
                                                    }} class="form-check-input" name="p_monday_dayoff" value="T">
                                                </div>
                                            </td>
                                            <td>

                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->p_monday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_monday_from)->format($generalData->time_format):'' }}"
                                                        name="p_monday_from">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>

                                            </td>
                                            <td>
                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" name="p_monday_to" value="{{ isset($workingtimeData->p_monday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_monday_to)->format($generalData->time_format):'' }}">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-day="tuesday" data-type="pickup">
                                            <td>Tuesday</td>
                                            <td class="text-center">
                                                <div class="icheckbox_square-green" style="position: relative;">
                                                    <input type="checkbox" {{ isset($workingtimeData->p_tuesday_dayoff)?$workingtimeData->p_tuesday_dayoff=='T'?'checked':'':''
                                                    }} class="form-check-input" name="p_tuesday_dayoff" value="T">
                                                </div>
                                            </td>
                                            <td>

                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->p_tuesday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_tuesday_from)->format($generalData->time_format):'' }}"
                                                        name="p_tuesday_from">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>

                                            </td>
                                            <td>
                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" name="p_tuesday_to" value="{{ isset($workingtimeData->p_tuesday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_tuesday_to)->format($generalData->time_format):'' }}">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-day="wednesday" data-type="pickup">
                                            <td>Wednesday</td>
                                            <td class="text-center">
                                                <div class="icheckbox_square-green" style="position: relative;">
                                                    <input type="checkbox" {{ isset($workingtimeData->p_wednesday_dayoff)?$workingtimeData->p_wednesday_dayoff=='T'?'checked':'':''
                                                    }} class="form-check-input" name="p_wednesday_dayoff" value="T">
                                                </div>
                                            </td>
                                            <td>

                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->p_wednesday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_wednesday_from)->format($generalData->time_format):'' }}"
                                                        name="p_wednesday_from">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>

                                            </td>
                                            <td>
                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" name="p_wednesday_to" value="{{ isset($workingtimeData->p_wednesday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_wednesday_to)->format($generalData->time_format):'' }}">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-day="thursday" data-type="pickup">
                                            <td>Thursday</td>
                                            <td class="text-center">
                                                <div class="icheckbox_square-green" style="position: relative;">
                                                    <input type="checkbox" {{ isset($workingtimeData->p_thursday_dayoff)?$workingtimeData->p_thursday_dayoff=='T'?'checked':'':''
                                                    }} class="form-check-input" name="p_thursday_dayoff" value="T">
                                                </div>
                                            </td>
                                            <td>

                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->p_thursday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_thursday_from)->format($generalData->time_format):'' }}"
                                                        name="p_thursday_from">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>

                                            </td>
                                            <td>
                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" name="p_thursday_to" value="{{ isset($workingtimeData->p_thursday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_thursday_to)->format($generalData->time_format):'' }}">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-day="friday" data-type="pickup">
                                            <td>Friday</td>
                                            <td class="text-center">
                                                <div class="icheckbox_square-green" style="position: relative;">
                                                    <input type="checkbox" {{ isset($workingtimeData->p_friday_dayoff)?$workingtimeData->p_friday_dayoff=='T'?'checked':'':''
                                                    }} class="form-check-input" name="p_friday_dayoff" value="T">
                                                </div>
                                            </td>
                                            <td>

                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->p_friday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_friday_from)->format($generalData->time_format):'' }}"
                                                        name="p_friday_from">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>

                                            </td>
                                            <td>
                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" name="p_friday_to" value="{{ isset($workingtimeData->p_friday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_friday_to)->format($generalData->time_format):'' }}">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-day="saturday" data-type="pickup">
                                            <td>Saturday</td>
                                            <td class="text-center">
                                                <div class="icheckbox_square-green" style="position: relative;">
                                                    <input type="checkbox" {{ isset($workingtimeData->p_saturday_dayoff)?$workingtimeData->p_saturday_dayoff=='T'?'checked':'':''
                                                    }} class="form-check-input" name="p_saturday_dayoff" value="T">
                                                </div>
                                            </td>
                                            <td>

                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->p_saturday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_saturday_from)->format($generalData->time_format):'' }}"
                                                        name="p_saturday_from">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>

                                            </td>
                                            <td>
                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" name="p_saturday_to" value="{{ isset($workingtimeData->p_saturday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_saturday_to)->format($generalData->time_format):'' }}">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-day="sunday" data-type="pickup">
                                            <td>Sunday</td>
                                            <td class="text-center">
                                                <div class="icheckbox_square-green" style="position: relative;">
                                                    <input type="checkbox" {{ isset($workingtimeData->p_sunday_dayoff)?$workingtimeData->p_sunday_dayoff=='T'?'checked':'':''
                                                    }} class="form-check-input" name="p_sunday_dayoff" value="F">
                                                </div>
                                            </td>
                                            <td>

                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->p_sunday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_sunday_from)->format($generalData->time_format):'' }}"
                                                        name="p_sunday_from">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>

                                            </td>
                                            <td>
                                                <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                    <input style="padding-left: 2px;" type="text" class="form-control" name="p_sunday_to" value="{{ isset($workingtimeData->p_sunday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->p_sunday_to)->format($generalData->time_format):'' }}">
                                                    <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>

                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="col-lg-6">
                                <div class="m-b-md">
                                    <h5 class="no-margins">Working Time / Delivery</h5>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Day of week</th>
                                                <th>Is day off</th>
                                                <th>Start time</th>
                                                <th>End time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-day="monday" data-type="pickup">
                                                <td>Monday</td>
                                                <td class="text-center">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" {{ isset($workingtimeData->d_monday_dayoff)?$workingtimeData->d_monday_dayoff=='T'?'checked':'':''
                                                        }} class="form-check-input" name="d_monday_dayoff" value="T">
                                                    </div>
                                                </td>
                                                <td>
    
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->d_monday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_monday_from)->format($generalData->time_format):'' }}"
                                                            name="d_monday_from">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
    
                                                </td>
                                                <td>
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" name="d_monday_to" value="{{ isset($workingtimeData->d_monday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_monday_to)->format($generalData->time_format):'' }}">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-day="tuesday" data-type="pickup">
                                                <td>Tuesday</td>
                                                <td class="text-center">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" {{ isset($workingtimeData->d_tuesday_dayoff)?$workingtimeData->d_tuesday_dayoff=='T'?'checked':'':''
                                                        }} class="form-check-input" name="d_tuesday_dayoff" value="T">
                                                    </div>
                                                </td>
                                                <td>
    
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->d_tuesday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_tuesday_from)->format($generalData->time_format):'' }}"
                                                            name="d_tuesday_from">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
    
                                                </td>
                                                <td>
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" name="d_tuesday_to" value="{{ isset($workingtimeData->d_tuesday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_tuesday_to)->format($generalData->time_format):'' }}">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-day="wednesday" data-type="pickup">
                                                <td>Wednesday</td>
                                                <td class="text-center">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" {{ isset($workingtimeData->d_wednesday_dayoff)?$workingtimeData->d_wednesday_dayoff=='T'?'checked':'':''
                                                        }} class="form-check-input" name="d_wednesday_dayoff" value="T">
                                                    </div>
                                                </td>
                                                <td>
    
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->d_wednesday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_wednesday_from)->format($generalData->time_format):'' }}"
                                                            name="d_wednesday_from">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
    
                                                </td>
                                                <td>
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" name="d_wednesday_to" value="{{ isset($workingtimeData->d_wednesday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_wednesday_to)->format($generalData->time_format):'' }}">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-day="thursday" data-type="pickup">
                                                <td>Thursday</td>
                                                <td class="text-center">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" {{ isset($workingtimeData->d_thursday_dayoff)?$workingtimeData->d_thursday_dayoff=='T'?'checked':'':''
                                                        }} class="form-check-input" name="d_thursday_dayoff" value="T">
                                                    </div>
                                                </td>
                                                <td>
    
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->d_thursday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_thursday_from)->format($generalData->time_format):'' }}"
                                                            name="d_thursday_from">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
    
                                                </td>
                                                <td>
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" name="d_thursday_to" value="{{ isset($workingtimeData->d_thursday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_thursday_to)->format($generalData->time_format):'' }}">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-day="friday" data-type="pickup">
                                                <td>Friday</td>
                                                <td class="text-center">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" {{ isset($workingtimeData->d_friday_dayoff)?$workingtimeData->d_friday_dayoff=='T'?'checked':'':''
                                                        }} class="form-check-input" name="d_friday_dayoff" value="T">
                                                    </div>
                                                </td>
                                                <td>
    
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->d_friday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_friday_from)->format($generalData->time_format):'' }}"
                                                            name="d_friday_from">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
    
                                                </td>
                                                <td>
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" name="d_friday_to" value="{{ isset($workingtimeData->d_friday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_friday_to)->format($generalData->time_format):'' }}">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-day="saturday" data-type="pickup">
                                                <td>Saturday</td>
                                                <td class="text-center">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" {{ isset($workingtimeData->d_saturday_dayoff)?$workingtimeData->d_saturday_dayoff=='T'?'checked':'':''
                                                        }} class="form-check-input" name="d_saturday_dayoff" value="T">
                                                    </div>
                                                </td>
                                                <td>
    
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->d_saturday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_saturday_from)->format($generalData->time_format):'' }}"
                                                            name="d_saturday_from">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
    
                                                </td>
                                                <td>
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" name="d_saturday_to" value="{{ isset($workingtimeData->d_saturday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_saturday_to)->format($generalData->time_format):'' }}">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-day="sunday" data-type="pickup">
                                                <td>Sunday</td>
                                                <td class="text-center">
                                                    <div class="icheckbox_square-green" style="position: relative;">
                                                        <input type="checkbox" {{ isset($workingtimeData->d_sunday_dayoff)?$workingtimeData->d_sunday_dayoff=='T'?'checked':'':''
                                                        }} class="form-check-input" name="d_sunday_dayoff" value="F">
                                                    </div>
                                                </td>
                                                <td>
    
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" value="{{ isset($workingtimeData->d_sunday_from)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_sunday_from)->format($generalData->time_format):'' }}"
                                                            name="d_sunday_from">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
    
                                                </td>
                                                <td>
                                                    <div class="input-group clockpicker" data-placement="bottom" data-twelvehour="{{ $timeFormat==true?'true':'false' }}" data-autoclose="true">
                                                        <input style="padding-left: 2px;" type="text" class="form-control" name="d_sunday_to" value="{{ isset($workingtimeData->d_sunday_to)?\Carbon\Carbon::createFromFormat('H:i:s',$workingtimeData->d_sunday_to)->format($generalData->time_format):'' }}">
                                                        <div class="input-group-addon input-group-append"><i class="far fa-clock input-group-text"></i></div>
    
                                                    </div>
                                                </td>
                                            </tr>
    
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                    </div>


                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
        </div>

    </div>
</div>
@stop()