@extends('layouts.app')

@section('ktmspice-admin-content')
<style>
    .table td img, .jsgrid .jsgrid-table td img{
        border-radius: 0;
        width: 192px;
        height: 80px;
    }
</style>

          <div class="page-header">
            <h3 class="page-title">
            Home Page Slider List
            </h3>
            <nav aria-label="breadcrumb">
              <a href="{{url('ktm-admin/manage/homepageslider/addnew')}}" class="btn btn-primary btn-sm">Add New Slider</a>
            </nav>
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
<div class="col-lg-12 grid-margin stretch-card">
<div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Image
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Sort Order
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                          Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                       

                      @if(count($sliderData)>0)
                      @foreach($sliderData as $slider)
                       <tr>
                          <td class="py-2">
                            <img src="{{url('/images/upload/homepageslider/'.$slider->image)}}" alt="image">
                          </td>
                          <td>
                           {{$slider->title}}
                          </td>
                          <td>
                          {{$slider->sort_order}}
                          </td>
                          <td>
                            <div class="badge badge-pill {{$slider->status=='Active'?'badge-success':'badge-danger'}}"> {{$slider->status}}</div>
                          </td>
                          <td>
                            <a href="{{url('ktm-admin/manage/homepageslider/deleteslider/'.$slider->id)}}" onclick="return confirm('Would you like to delete this slider')"  class="btn btn-danger btn-sm">Delete</a>
                            <a href="{{url('ktm-admin/manage/homepageslider/editslider/'. $slider->id)}}"  class="btn btn-primary btn-sm">Edit</a>
                          </td>
                        </tr>
                       @endforeach
                
                        @else
                        <tr colspan="5">
                       <td colspan="5" style="text-align:center;font-size:16px">No record found ! <br>
                        <a href="{{url('ktm-admin/manage/homepageslider/addnew')}}">Add new homeslider </a>
                       </td>
                       </tr>
                      @endif
                       
                      </tbody>
                    </table>
                  </div>
                  
</div>
{{ $sliderData->links() }}
</div>
@stop()
