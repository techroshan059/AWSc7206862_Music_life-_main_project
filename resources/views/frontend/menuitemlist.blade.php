@extends('layouts.frontend.front_layout1')

@section('ktmspice-frontlayout1-content')
    <section class="hero banner banner--general">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h1 style="font-weight: 100;" class="mb-0 mt-2 mt-md-0">Our Menu Items</h1>
                    </div>
                   
                </div>
            </div>
    </section>

    <div class="restaurant-front spinner">
        <div class="container">


                <div class="row">
          
                        <menucategories></menucategories>
                        <menuitems></menuitems>
                        <itemcart></itemcart>
              
                </div>
        
        </div>
    </div>
@stop()