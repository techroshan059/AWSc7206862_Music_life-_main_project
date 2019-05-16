@extends('layouts.app')

@section('ktmspice-admin-content')
  
    <div class="page-header">
        <h3>Order Options </h3>
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
                                 <label for="title">Minimum order amount for delivery</label>
                                 <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text"  name="o_minimum_order" class="form-control" step="0.01" value="{{ isset($data)?$data->o_minimum_order:'0.00' }}" data-msg-number="">
                                      </div>
                            </div>

                            <div class="form-group">
                                    <label for="title">Tax payment</label>
                                    <div class="input-group">
                                          
                                           <input type="text" name="o_tax_payment" class="form-control" step="0.01" value="{{ isset($data)?$data->o_tax_payment:'0.00' }}" data-msg-number="">
                                           <div class="input-group-prepend">
                                                <span class="input-group-text">%</span>
                                              </div>
                                        </div>
                               </div>

                               <div class="form-group">
                                    <label for="title">Delivery Amount</label>
                                    <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                  </div>
                                           <input type="text" name="o_delivery_amount" class="form-control" step="0.01" value="{{ isset($data)?$data->o_delivery_amount:'0.00' }}" data-msg-number="">
                                          
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
