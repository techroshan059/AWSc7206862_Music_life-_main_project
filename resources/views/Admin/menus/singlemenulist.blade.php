@extends('layouts.app')

@section('ktmspice-admin-content')


    <div class="page-header">
        <h3 class="page-title">
            Aloo Tika
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/menus')}}">Menu Lists</a></li>
                <li class="breadcrumb-item active" aria-current="page">Single menu list</li>
                <li class="breadcrumb-item active" aria-current="page">{{$menuItemData->item_name}}</li>
            </ol>
        </nav>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <img src="{{url('frontend/images/item_images/370x370'.'/'.$menuItemData->item_image_name)}}" alt="profile" class="img-lg rounded-circle mb-3">
                                <p>{{$menuItemData->item_description}}</p>

                            </div>


                            <div class="py-4 border-bottom">

                                <p class="clearfix">
                          <span class="float-left">
                            Price
                          </span>
                                    <span class="float-right text-muted">
                          {{$menuItemData->MenuItemPrice->menu_item_price}}
                          </span>
                                </p>

                                <p class="clearfix">
                          <span class="float-left">
                            Spice
                          </span>
                                    <span class="float-right text-muted">
                            {{$menuItemData->item_spice!=''?'Yes':'No'}}
                          </span>
                                </p>

                                <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                                    <span class="float-right text-muted">
                              {{$menuItemData->item_status==1?'Active':'Inactive'}}
                          </span>
                                </p>
                            </div>
                            <div class=" py-4">
                                @if(count(explode(',',$menuItemData->item_flavors))>1)
                                <p>Flavors</p>
                                <div>
                                    @foreach(explode(',',$menuItemData->item_flavors) as $itemFlavour)
                                        <label class="badge badge-outline-dark">{{$itemFlavour}}</label>
                                        @endforeach()

                                </div>
                                    @else
                                    <p>No flavour available in this menu</p>
                                @endif()
                            </div>
                            <div class="border-top py-4">
                                @if(count(explode(',',$menuItemData->item_meta_keywords))>1)
                                    <p>Meta Keywords</p>
                                    <div>
                                        @foreach(explode(',',$menuItemData->item_meta_keywords) as $itemKeyword)
                                            <label class="badge badge-outline-dark">{{$itemKeyword}}</label>
                                        @endforeach()
                                    </div>
                                    @else
                                    <p>No Meta Keywords Available in this menu</p>
                                @endif()
                            </div>
                        </div>
                        <div class="col-lg-8 pl-lg-5">

                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3>{{$menuItemData->item_name}}</h3>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 mr-2 text-muted">{{$menuItemData->category->title}}</h5>
                                        <div class="br-wrapper br-theme-css-stars"><select id="profile-rating" name="rating" autocomplete="off" style="display: none;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select><div class="br-widget"><a href="#" data-rating-value="" data-rating-text="1" class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="2"></a><a href="#" data-rating-value="3" data-rating-text="3"></a><a href="#" data-rating-value="4" data-rating-text="4"></a><a href="#" data-rating-value="5" data-rating-text="5"></a></div></div>
                                    </div>
                                </div>
                                <div>
                                 <a href="{{url('admin/menu/edit/'.$menuItemData->item_id)}}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Edit {{str_replace('_',' ',$menuItemData->item_name)}} Information">   <i class="fa fa-edit"></i></a>
                                </div>
                            </div>


                           
                            <div class="mt-4 py-2 border-top border-bottom">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Customer Id</th>
                                            <th>Customer</th>
                                            <th>Rating</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1201</td>
                                            <td class="font-weight-bold">
                                                <a href="#"><img src="{{url('images/faces/face13.jpg')}}" alt="profile" class="img-sm rounded-circle"> Roshan Shrestha</a>
                                            </td>
                                            <td class="text-muted">
                                                3.0
                                            </td>
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                <label class="badge badge-success badge-pill">Delivered</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12122</td>
                                            <td class="font-weight-bold">
                                                <a href="#"><img src="{{url('images/faces/face12.jpg')}}" alt="profile" class="img-sm rounded-circle"> Avishesk Oli</a>
                                            </td>
                                            <td class="text-muted">
                                                2.0
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                <label class="badge badge-success badge-pill">Delivered</label>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@stop()
