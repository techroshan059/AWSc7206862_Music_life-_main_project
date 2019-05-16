@extends('layouts.app')

@section('ktmspice-admin-content')
<div class="page-header">
            <h3 class="page-title">
                Edit Nave of Slider
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('ktm-admin/manage/homepageslider')}}">Home Page Slider List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                <li class="breadcrumb-item active" aria-current="page">Name of slider</li>
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
                      <input type="text" value="{{isset($sliderData->title)?$sliderData->title:''}}" class="form-control" name="title">
                      @if($errors->has('title'))
                      <label class="error mt-2 text-danger">{{$errors->first('title')}}</label>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="link">Link</label>
                      <input type="text"  value="{{isset($sliderData->link)?$sliderData->link:''}}" class="form-control" name="link">
                    </div>
                      <div class="form-group">
                          <label style="width: 100%">Image (1920px x 800px)</label>
                          <img for="image" style="width: 192px;height:80px; max-width: 192px;max-height: 80px;margin-bottom: 10px; border: 0.1em dotted #ccc; padding: 5px" id="previewImage"
                               src="{{url('images/upload/homepageslider/'.$sliderData->image)}}" />
                          <input type="file" onchange="readURL(this)" id="sliderImage" name="image" class="form-control">
                          @if($errors->has('image'))
                              <label class="error mt-2 text-danger">{{$errors->first('image')}}</label>
                          @endif
                      </div>

                     <div class="form-group">
                      <label for="sort_order">Sort Order</label>
                      <input type="number" value="{{isset($sliderData->sort_order)?$sliderData->sort_order:''}}"  class="form-control" name="sort_order">
                      @if($errors->has('sort_order'))
                      <label class="error mt-2 text-danger">{{$errors->first('sort_order')}}</label>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                        <select class="form-control" value="{{old('status')}}"  name="status">
                        <option value="">Select Status</option>
                          <option value="Active" {{isset($sliderData->status)?$sliderData->status=='Active'?'selected':'':''}} >Active</option>
                          <option value="Inactive" {{isset($sliderData->status)?$sliderData->status=='Inactive'?'selected':'':''}}>Inactive</option>
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
