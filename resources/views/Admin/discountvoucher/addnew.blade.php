@extends('layouts.app')

@section('ktmspice-admin-content')
<div class="page-header">
            <h3 class="page-title">
                Add New Discount Voucher
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/manage/discount-voucher')}}">Discount Vourchers List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Discount Voucher</li>
                </ol>
            </nav>
          </div>



          <div class="row">
 <div class="col-lg-12">
 <div class="card">
                <div class="card-body">
                  <form class="forms-sample" enctype="multipart/form-data" method="POST">
                  @csrf()
                    <div class="form-group">
                      <label for="title">Title </label>
                      <input type="text" value="{{old('title')}}" class="form-control" name="title">
                      @if($errors->has('title'))
                      <label class="error mt-2 text-danger">{{$errors->first('title')}}</label>
                      @endif
                    </div>
                    <div class="form-group">
                    <label for="discount_percentage">Discount Percentage </label>
                    <div class="input-group">
                      
                      <input type="number" value="{{old('discount_percentage')}}" name="discount_percentage" step="0.01" min="0" max="100" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text">%</span>
                      </div>
                     
                    </div>
                    @if($errors->has('discount_percentage'))
                      <label class="error mt-2 text-danger">{{$errors->first('discount_percentage')}}</label>
                      @endif
                  </div>
                    <div class="form-group">
                      <label for="from_date">Start Date</label>
                      <div id="datepicker-from-date" class="input-group date datepicker">
                        <input value="{{old('from_date')}}"  name="from_date" type="text" class="form-control">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="far fa-calendar input-group-text"></span>
                        </span>
                      </div>
                      @if($errors->has('from_date'))
                      <label class="error mt-2 text-danger">{{$errors->first('from_date')}}</label>
                      @endif
                                       </div>



                                       <div class="form-group">
                      <label for="from_date">Total Days</label>
                      <input value="{{old('total_days')}}"  name="total_days" type="number" class="form-control">
            
                      @if($errors->has('total_days'))
                      <label class="error mt-2 text-danger">{{$errors->first('total_days')}}</label>
                      @endif
                                       </div>
                   
                 
                    <div class="form-group">
                      <label for="discount_type">Discount Type</label>
                        <select onchange="discount_typeData()" id="discount_type" class="form-control" value="{{old('discount_type')}}"  name="discount_type">
                        <option value="">Select Discount Type</option>
                          <option value="menus">For All Menus</option>
                          <option value="catering">For All Caterings</option>
                          <option value="individual">Individual Offer Code</option>
                        </select>
                        @if($errors->has('discount_type'))
                      <label class="error mt-2 text-danger">{{$errors->first('discount_type')}}</label>
                      @endif
                      </div>


            <div class="form-group discount_type_data">
            @if($errors->has('discount_type_text'))
                      <label class="error mt-2 text-danger">{{$errors->first('discount_type_text')}}</label>
            @endif
            </div>
                 


                    
    
                    <button  type="submit" class="btn btn-primary mr-2">Save New Slider</button>
                  
                  </form>
                </div>
              </div>
 </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

 $(function(){
  discount_typeData();
 });
 function discount_typeData(){
   var discount_type_vaule =  $('#discount_type').val();
   var htmlDesign = '';
   switch (discount_type_vaule) {
       case "menus":
       htmlDesign = " <label>Max Order Amount</label> <div class='input-group'><div class='input-group-prepend'><span class='input-group-text'>$</span>  </div><input type='number' name='discount_type_text'  step='0.01' class='form-control'></div>"
             break
       case "catering":
       htmlDesign = " <label>Max Order Amount</label> <div class='input-group'><div class='input-group-prepend'><span class='input-group-text'>$</span>  </div><input type='number' name='discount_type_text'  step='0.01' class='form-control'></div>"
      
               break
       case "individual":
       
       htmlDesign = " <label>Discount Code</label> <input type='text' name='discount_type_text' value='"+ randomString(6) +"'   class='form-control'></div>"
      
       
      
           break
       default :
          
           break
   }
   $('.discount_type_data').html(htmlDesign).show();
 }

 function randomString(length){
   var text ="";
   var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
   for(var i = 0; i < length; i++) {
			
      text += possible.charAt(Math.floor(Math.random() * possible.length));
    
    }
    
    return text;
 }
</script>

@stop()
