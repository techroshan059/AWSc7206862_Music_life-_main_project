@extends('layouts.app')

@section('ktmspice-admin-content')


          <div class="page-header">
            <h3 class="page-title">
            Category List
            </h3>
            <nav aria-label="breadcrumb">
              <a href="{{url('ktm-admin/manage/category/addnew')}}" class="btn btn-primary btn-sm">Add New Category</a>
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
                          <th>  Nationality</th>
                          <th>
                            Title
                          </th>
                        
                          <th>
                            Category Type
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
                       

                      @if(count($categoryData)>0)
                      @foreach($categoryData as $category)
                       <tr>
                         <td>{{ $category->Countries->nationality }}</td>
                          <td >
                          {{str_replace('-',' ',$category->title)}}
                          </td>
                          <td>
                          {{$category->category_type}}
                          </td>
                       
                          <td>
                            <div class="badge badge-pill {{$category->status=='Active'?'badge-success':'badge-danger'}}"> {{$category->status}}</div>
                          </td>
                          <td>
                        
                              <a href="{{url('ktm-admin/manage/category/editslider/'. $category->id)}}"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit Data"  style="font-size: 20px"></i></a>
                            <a href="{{url('ktm-admin/manage/category/deleteslider/'.$category->id)}}"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete Data"  style="font-size: 20px;color:red"></i></a>
                    
                          </td>
                        </tr>
                       @endforeach
                
                        @else
                        <tr colspan="5">
                       <td colspan="5" style="text-align:center;font-size:16px">No record found ! <br>
                        <a href="{{url('ktm-admin/manage/category/addnew')}}">Add new category </a>
                       </td>
                       </tr>
                      @endif
                       
                      </tbody>
                    </table>
                  </div>
                  
</div>

</div>
@stop()