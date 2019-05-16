@extends('layouts.app')

@section('ktmspice-admin-content')
<div class="page-header">
            <h3 class="page-title">
                Edit Title name
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('ktm-admin/manage/category')}}">Category List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                <li class="breadcrumb-item active" aria-current="page">Category Title</li>
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
                      <input type="text" value="{{isset($editCategory->title)?$editCategory->title:''}}" class="form-control" name="title">
                      @if($errors->has('title'))
                      <label class="error mt-2 text-danger">{{$errors->first('title')}}</label>
                      @endif
                    </div>


                    <div class="form-group">
                        <label for="title">Nationality </label>
  
                        <select name="country_id" class="form-control">
                          <option value="">Select Nationality</option>
                     
                          @foreach (\App\Http\adminHelper::getCountries() as $country )
                          <option value="{{ $country->id }}" {{ $editCategory->country_id == $country->id?'selected':'' }} >{{ $country->nationality }}</option>
                          @endforeach
                        </select>
                      
                        @if($errors->has('nationality'))
                        <label class="error mt-2 text-danger">{{$errors->first('nationality')}}</label>
                        @endif
                      </div>
                   
                    <div class="form-group">
                      <label for="category_type">Category Type</label>
                        <select class="form-control"  name="category_type">
                        <option value="">Select Category Type</option>
                          <option value="Menu" {{isset($editCategory->category_type)?$editCategory->category_type=='Menu'?'selected':'':''}}>Menu</option>
                          <option value="Catering" {{isset($editCategory->category_type)?$editCategory->category_type=='Catering'?'selected':'':''}}>Catering</option>
                        </select>
                        @if($errors->has('category_type'))
                      <label class="error mt-2 text-danger">{{$errors->first('category_type')}}</label>
                      @endif
                      </div>

                    <div class="form-group">
                      <label for="status">Status</label>
                        <select class="form-control" value="{{old('status')}}"  name="status">
                        <option value="">Select Status</option>
                          <option value="Active" {{isset($editCategory->status)?$editCategory->status=='Active'?'selected':'':''}} >Active</option>
                          <option value="Inactive" {{isset($editCategory->status)?$editCategory->status=='Inactive'?'selected':'':''}}>Inactive</option>
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
