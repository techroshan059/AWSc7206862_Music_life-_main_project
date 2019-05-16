@extends('layouts.app')

@section('ktmspice-admin-content')
  
    <div class="page-header">
        <h3>General Options </h3>
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
                            <div class="form-group">
                                <label for="title">Date format</label>
                                <select name="date_format" class="form-control" aria-invalid="false">
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='d.m.Y'?'selected':'':'' }} value="d.m.Y" >d.m.Y (25.09.2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='m.d.Y'?'selected':'':'' }} value="m.d.Y">m.d.Y (09.25.2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='Y.m.d'?'selected':'':'' }}  value="Y.m.d">Y.m.d (2012.09.25)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='j.n.Y'?'selected':'':'' }}  value="j.n.Y">j.n.Y (25.9.2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='n.j.Y'?'selected':'':'' }}  value="n.j.Y">n.j.Y (9.25.2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='Y.n.j'?'selected':'':'' }}  value="Y.n.j">Y.n.j (2012.9.25)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='d/m/Y'?'selected':'':'' }}  value="d/m/Y">d/m/Y (25/09/2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='m/d/Y'?'selected':'':'' }}  value="m/d/Y">m/d/Y (09/25/2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='Y/m/d'?'selected':'':'' }}  value="Y/m/d">Y/m/d (2012/09/25)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='j/n/Y'?'selected':'':'' }}  value="j/n/Y">j/n/Y (25/9/2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='n/j/Y'?'selected':'':'' }}  value="n/j/Y">n/j/Y (9/25/2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='Y/n/j'?'selected':'':'' }}  value="Y/n/j">Y/n/j (2012/9/25)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='d-m-Y'?'selected':'':'' }}  value="d-m-Y">d-m-Y (25-09-2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='m-d-Y'?'selected':'':'' }}  value="m-d-Y">m-d-Y (09-25-2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='Y-m-d'?'selected':'':'' }}  value="Y-m-d">Y-m-d (2012-09-25)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='j-n-Y'?'selected':'':'' }}  value="j-n-Y">j-n-Y (25-9-2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='n-j-Y'?'selected':'':'' }}  value="n-j-Y">n-j-Y (9-25-2012)</option>
                                    <option {{ isset($generalData->date_format)?$generalData->date_format=='Y-n-j'?'selected':'':'' }}  value="Y-n-j">Y-n-j (2012-9-25)</option>                                                
                                </select>
                             </div>



                             <div class="form-group">
                                <label for="title">Time format</label>
                                <select name="time_format" class="form-control">
                                    <option {{ isset($generalData->time_format)?$generalData->time_format=='H:i'?'selected':'':'' }}  value="H:i" selected="selected">H:i (09:45)</option>
                                    <option {{ isset($generalData->time_format)?$generalData->time_format=='G:i'?'selected':'':'' }}  value="G:i">G:i (9:45)</option>
                                    <option {{ isset($generalData->time_format)?$generalData->time_format=='h:i a'?'selected':'':'' }}  value="h:i a">h:i a (09:45 am)</option>
                                    <option {{ isset($generalData->time_format)?$generalData->time_format=='h:i A'?'selected':'':'' }}  value="h:i A">h:i A (09:45 AM)</option>
                                    <option {{ isset($generalData->time_format)?$generalData->time_format=='g:i a'?'selected':'':'' }}  value="g:i a">g:i a (9:45 am)</option>
                                    <option {{ isset($generalData->time_format)?$generalData->time_format=='g:i A'?'selected':'':'' }}  value="g:i A">g:i A (9:45 AM)</option>                                               
                                 </select>
                             </div>



                             <div class="form-group">
                                <label for="title">Currency</label>
                                <select name="currency_id" class="form-control">
                                            @foreach ($currencyData as $currency)
                                                <option {{ isset($generalData->currency_id)?$generalData->currency_id==$currency->id?'selected':'':'' }} value="{{ $currency->id }}"  >{{ $currency->code.'('.$currency->symbol.')' }}</option>
                                            @endforeach                                    
                                 </select>
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
