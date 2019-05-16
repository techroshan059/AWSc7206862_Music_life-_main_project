
<section class="section" style="padding: 0; margin-bottom: 10px">
    <div class="container">
        {{--<div><img src="/images/events/Banner_dipawali_offer-min.png" style="width:100%;"></div>--}}
        <div class="row">
            @foreach($categoriesData as $category)
            <div class="col-md-6 col-lg-3">
                <div class="listing">
                    <div class="listing__photo" style="height:150px !important">
                        <a href="{{'/menu-items#Category-'.$category->title}}">
                            <img src="{{url('frontend/images/menus_images/01.jpg')}}" style="width:100%;">
                        </a>
                    </div>
                    <div class="title20 mt-2">
                        <a href="{{'/menu/'.$category->title}} .'/"><span>{{str_replace('-',' ',$category->title)}}</span></a>
                    </div>

                </div>
            </div>
                @endforeach
            </div>
    </div>
    </div>

</section>