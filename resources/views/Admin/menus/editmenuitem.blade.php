@extends('layouts.app')

@section('ktmspice-admin-content')
    <div class="page-header">
        <h3 class="page-title">
            Add New Menu Item List
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('ktm-admin/menus')}}">Menu Item List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Item Menu</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample"  enctype="multipart/form-data" method="POST">

                        @csrf()
                        <div class="form-group">
                            <label for="category_type">Item Category</label>
                            <select class="form-control"   name="menu_category_id">
                                <option value="">Select Menu Category</option>
                                    @foreach($menuCategory as $category)
                                    <option value="{{$category->id}}" {{$menuItemData->category_id == $category->id?'selected':''}}>{{$category->title}}</option>
                                        @endforeach
                            </select>
                            @if($errors->has('menu_category_id'))
                                <label class="error mt-2 text-danger">{{$errors->first('menu_category_id')}}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="item_name">Item Title </label>
                            <input type="text"  value="{{str_replace('-',' ',$menuItemData->item_name)}}" class="form-control menu_item_title" name="item_name">
                            @if($errors->has('item_name'))
                                <label class="error mt-2 text-danger">{{$errors->first('item_name')}}</label>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>Item Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input name="menu_item_price" type="text" step="0.00" value="{{$menuItemData->MenuItemPrice->menu_item_price}}" class="form-control" placeholder="Menu Price">

                            </div>
                            @if($errors->has('menu_item_price'))
                                <label class="error" for="price">{{$errors->first('menu_item_price')}}</label>
                            @endif

                        </div>

                        <div class="form-group">
                            <label for="item_description">Item Description </label>
                            <textarea class="form-control" rows="3" name="description" >{{$menuItemData->item_description}}</textarea>
                              @if($errors->has('item_description'))
                                <label class="error mt-2 text-danger">{{$errors->first('item_description')}}</label>
                            @endif
                        </div>
                        <div class="form-group">
                            <label style="width: 100%">Item Image (370px x 370px)</label>
                            <img for="image" style="width: 185px;height:185px; max-width: 370px;max-height: 370px;margin-bottom: 10px; border: 0.1em dotted #ccc; padding: 5px" id="previewImage" src="{{url('frontend/images/item_images/370x370').'/'.$menuItemData->item_image_name}}" />
                            <input type="file" onchange="readURL(this)" id="sliderImage" name="item_image_name" class="form-control">
                            @if($errors->has('item_image_name'))
                                <label class="error mt-2 text-danger">{{$errors->first('item_image_name')}}</label>
                            @endif
                        </div>



                        <div class="form-group" >
                            <div class="form-check form-check-flat form-check-primary">
                                <label for="item_flavors">Add Flavors (Optional)</label>
                                <input type="tags" value="{{$menuItemData->item_flavors}}" name="item_flavors" id="flavortags" class="form-control">
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="form-check form-check-flat form-check-primary">
                                <label for="item_soda">Add Soda (Optional - Only for drink)</label>
                                <input type="tags" value="{{$menuItemData->item_soda}}" name="item_soda" id="sodatags" class="form-control">
                            </div>
                        </div>






                     

                        <hr>
                        <div class="form-group" style="margin-bottom: -5px;">
                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                    <input  {{$menuItemData->item_spice!=''?'checked':''}} name="item_spice" type="checkbox" class="form-check-input">
                                    Would you like to add spice to this menu
                                    <i class="input-helper"></i></label>
                            </div>
                        </div>







                         <hr>




                        <div class="form-group">
                            <label for="description">Meta Keywords</label>
                            <input value="{{$menuItemData->item_meta_keywords}}" name="item_meta_keywords" id="tags" value="" />

                        </div>


                        <div class="form-group">
                            <label for="status">Menu Status</label>
                            <select class="form-control" value="{{old('item_status')}}"  name="item_status">
                                <option value="">Select Menu Status</option>
                                <option value="1" {{$menuItemData->item_status==1?'selected':''}} >Active</option>
                                <option value="0" {{$menuItemData->item_status==0?'selected':''}}>Inactive</option>
                            </select>
                            @if($errors->has('item_status'))
                                <label class="error mt-2 text-danger">{{$errors->first('item_status')}}</label>
                            @endif
                        </div>





                        <button type="submit" class="btn btn-primary mr-2">Save New Slider</button>

                    </form>
                </div>
            </div>
        </div>
    </div>





 

@stop()
