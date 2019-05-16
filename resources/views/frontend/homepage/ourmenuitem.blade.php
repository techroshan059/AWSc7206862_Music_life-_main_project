<div class="menu">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-xs-12 commontop text-center">
                <h4>our menu</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                <hr>
            </div>
            <div class="col-sm-12 col-xs-12">

                @foreach($ourMenuItem as $menuItem)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box">
                            <div class="image">
                                <img src="{{url('frontend/images/item_images/small/01.jpg')}}" alt="image" title="image" class="img-responsive">
                            </div>
                            <div class="caption">
                                <h4>{{substr(str_replace('-',' ',$menuItem->item_name),1,35)}}</h4>
                                <p class="des">{{$menuItem->category->title}}</p>
                                <div class="price">{{\App\Http\adminHelper::getLocal()->currency->symbol }}35.00</div>
                            </div>
                        </div>
                    </div>
                @endforeach()

            </div>
            <div class="text-center" style="margin-bottom: 20px">
                <button type="button" class="btn-primary" onclick="location.href='our_menu.html'">view more <i class="icofont icofont-curved-double-right"></i></button>
            </div>
        </div>
    </div>
</div>