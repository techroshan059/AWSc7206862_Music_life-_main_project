@extends('layouts.app')

@section('ktmspice-admin-content')
  
    <div class="page-header">
        <h3>Payment Method</h3>
    </div>



    
    <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
       
             <form class="forms-sample" method="post">
                 @csrf()
                 <div class="form-group">
                     <label>Payment Method Title</label>
                     <input type="text"value="" class="form-control" name="payment_method" >
                     @if($errors->has('payment_method'))
                         <label class="error" for="payment_method">{{$errors->first('payment_method')}}</label>
                     @endif
 
                 </div>
 
                 <div class="form-group">
                     <label>Public Key</label>
                     <input type="text" value="" class="form-control" name="public_key" >
                     @if($errors->has('public_key'))
                         <label class="error" for="public_key">{{$errors->first('public_key')}}</label>
                     @endif
 
                 </div>
 
                 <div class="form-group">
                     <label>Private Key</label>
                     <input type="text" value="" class="form-control" name="private_key">
                     @if($errors->has('private_key'))
                         <label class="error" for="private_key">{{$errors->first('private_key')}}</label>
                     @endif
 
                 </div>
               
                 <div class="form-group">
                     <label>Description</label>
                     <input type="text" value="" class="form-control" name="description" >
                     @if($errors->has('description'))
                         <label class="error" for="description">{{$errors->first('description')}}</label>
                     @endif
 
                 </div>


                 <div class="form-group">
                    <label>Status</label>
                    <select name="is_active" class="form-control">
                        <option value="1" >Active</option>
                        <option value="2" >Isactive</option>
                    </select>

                </div>


                 
 
 
               
 
                 <input type="text" hidden name="id" value="">
 
                 <button type="submit" style="float: right" class="btn btn-primary mr-2">Save</button>
 
             </form>
 
            
           
        
     </div>

@stop()
