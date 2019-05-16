@extends('layouts.app')

@section('ktmspice-admin-content')
<div class="page-header">
            <h3 class="page-title">
                Add New Category
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('ktm-admin/manage/category')}}">Category List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
                </ol>
            </nav>
          </div>
<div class="row">
 <div class="col-lg-12">
    @if (session('errors'))
    <div class="alert alert-error alert-dismissible fade show" role="alert">
      {{session('errors')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
 <div class="card">
                <div class="card-body">
                  <form class="forms-sample"  method="POST">
                  @csrf()
                    <div class="form-group">
                      <label for="title">Title </label>
                      <input type="text" value="{{old('title')}}" class="form-control" name="title">
                      @if($errors->has('title'))
                      <label class="error mt-2 text-danger">{{$errors->first('title')}}</label>
                      @endif
                    </div>

                     <div class="form-group">
                      <label for="title">Nationality </label>

                      <select name="country_id" class="form-control">
                        <option value="">Select Nationality</option>
                   
                        @foreach ($getNationality as $country )
                        <option value="{{ $country->id }}">{{ $country->nationality }}</option>
                        @endforeach
                      </select>
                    
                      @if($errors->has('country_id'))
                      <label class="error mt-2 text-danger">{{$errors->first('country_id')}}</label>
                      @endif
                    </div>
                   
                    <div class="form-group">
                      <label for="category_type">Category Type</label>
                        <select class="form-control" value="{{old('category_type')}}"  name="category_type">
                        <option value="">Select Category Type</option>
                          <option value="Menu">Menu</option>
                          <option value="Catering">Catering</option>
                          <option value="Staff">Staff</option>
                        </select>
                        @if($errors->has('category_type'))
                      <label class="error mt-2 text-danger">{{$errors->first('category_type')}}</label>
                      @endif
                      </div>

                    <div class="form-group">
                      <label for="status">Status</label>
                        <select class="form-control" value="{{old('status')}}"  name="status">
                        <option value="">Select Status</option>
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>
                        </select>
                        @if($errors->has('status'))
                      <label class="error mt-2 text-danger">{{$errors->first('status')}}</label>
                      @endif
                      </div>
                    
    
                    <button type="submit" class="btn btn-primary mr-2">Save New Slider</button>
        
                  </form>
                </div>
              </div>
 </div>
</div>

@stop()
