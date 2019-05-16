@extends('layouts.frontend.front_layout1')

@section('ktmspice-frontlayout1-content')
    <section class="banner banner--landing d-flex align-items-center parallax">

        <div class="container parallax__front">

            <div class="row">
                <div class="col-md-9 col-lg-8 col-sm-9 mx-auto hero__container">

                    <h2 class="text-center col-md-12">Order food from the widest range of restaurants.</h2>
                    <div class="text-center col-md-12">
                        <a class="btn btn--hollow" href="{{url('/menu-items')}}">Our Menu</a>
                    </div>


                </div>
            </div>
        </div>

    </section>

    {{--<div class="slide ng-scope">--}}
        {{--<div class="slideshow owl-carousel owl-theme" style="opacity: 1; display: block;">--}}
            {{--<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 7680px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-1280px, 0px, 0px);"><div class="owl-item" style="width: 1280px;"><div class="item">--}}
                            {{--<img src="{{url('frontend/images/homepageslider/banner1.jpg')}}" alt="banner1" title="banner1" class="img-responsive">--}}
                        {{--</div></div><div class="owl-item" style="width: 1280px;"><div class="item">--}}
                            {{--<img src="{{url('frontend/images/homepageslider/banner1.jpg')}}" alt="banner1" title="banner1" class="img-responsive">--}}
                        {{--</div></div><div class="owl-item" style="width: 1280px;"><div class="item">--}}
                            {{--<img src="{{url('frontend/images/homepageslider/banner1.jpg')}}" alt="banner1" title="banner1" class="img-responsive">--}}
                        {{--</div></div></div></div>--}}


            {{--<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><i class="icofont icofont-scroll-bubble-left fa1"></i></div><div class="owl-next"><i class="icofont icofont-scroll-bubble-right fa2"></i></div></div></div></div>--}}


        {{--<!-- slide-detail start here -->--}}
        {{--<div class="slide-detail col-lg-6 col-md-9 col-sm-8">--}}
            {{--<div class="col-sm-12">--}}

                {{--<h4>good food &amp; good health</h4>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>--}}
                {{--<button type="button" class="btn-primary" onclick="location.href='our_menu.html'">Order it now !</button>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- slide-detail end here -->--}}
    {{--</div>--}}



    <div class="container">
        <div class="row">
            <div class="col-sm-12 commontop text-center">
                <h4>order delivery and take out</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                <hr>
            </div>
            <div class="col-sm-6 order col-sm-offset-3">

                <ul class="list-inline text-center">
                    <li>
                        <i class="icofont icofont-fast-food"></i>
                        <p>Select Food</p>
                    </li>
                    <li>
                        <i class="icofont icofont-food-basket"></i>
                        <p>Order Food</p>
                    </li>
                    <li>
                        <i class="icofont icofont-fast-delivery"></i>
                        <p>Delivery or Take Out</p>
                    </li>

                </ul>
                <img src="{{url('frontend/images/lines.png')}}" alt="line" title="line" class="img-responsive">
            </div>
        </div>
    </div>
    @include('frontend.homepage.menucaterory')
@stop