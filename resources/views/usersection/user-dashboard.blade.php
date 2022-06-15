<?php use App\Models\cottages; ?>

@extends('layouts.front.layout')

@section('content')
<style>
    /* common */
.ribbon {
  width: 150px;
  height: 150px;
  overflow: hidden;
  position: absolute;
}
.ribbon::before,
.ribbon::after {
  position: absolute;
  z-index: -1;
  content: '';
  display: block;
  border: 5px solid #2980b9;
}
.ribbon span {
  position: absolute;
  display: block;
  width: 225px;
  padding: 15px 0;
  background-color: #3498db;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
  color: #fff;
  font: 700 13px/1 'Lato', sans-serif;
  text-shadow: 0 1px 1px rgba(0,0,0,.2);
  text-transform: uppercase;
  text-align: center;
}
/* top right*/
.ribbon-top-right {
  top: -10px;
  right: -10px;
}
.ribbon-top-right::before,
.ribbon-top-right::after {
  border-top-color: transparent;
  border-right-color: transparent;
}
.ribbon-top-right::before {
  top: 0;
  left: 0;
}
.ribbon-top-right::after {
  bottom: 0;
  right: 0;
}
.ribbon-top-right span {
  left: -25px;
  top: 30px;
  transform: rotate(45deg);
}




</style>

<style>
                        body {
  /*padding: 30px;*/
}

.wrapper {
  position: relative;
  display: inline-block;
}


.new::before {
  content: "Available";
  position: absolute;
  width: 53px;
  height: 53px;
  background: #f5c905;
  border-radius: 50%;
  color: #fff;
  font-size: 15px;
  text-align: center;
  line-height: 53px;
  top: -25px;
  left: -25px;
}

.premium {
  position: absolute;
  display: inline-block;
  top: -1px;
  left: 120px;
  color: #fff;  
  background: #ec5366;
  width: 25px;
  height: 25px;
  text-align: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
}

.premium::after {
  content: "";
  position: absolute;
  top: 25px;
  left: 0;
  border-left: 12.5px solid #ec5366;
  border-right: 12.5px solid #ec5366;
  border-bottom: 8px solid transparent;
}

.gold {
  background: #c2ac6b;
}

.gold::after {
  border-left-color: #c2ac6b;
  border-right-color: #c2ac6b;
}

.pink::before {
  background: #ec5366;
}
                    </style>
    <section class="py-5">

            <div class="container px-4 px-lg-5 mt-5">
                   <strong> <h3> Cottage</h3></strong>

                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($cottages as $product)
                  

                    <div class="col mb-5">
                        <div class="card h-100"   style="background-color: #f8d9d9">
                        <!-- <div class="ribbon ribbon-top-right"><span>Available Cottage</span></div> -->
                            <div class="wrapper new"> <span class="premium"></span></div>

                            <!-- Product image-->
                            <img class="card-img-top"  style="width: 270px; height: 270px; padding: 10px" src="{{asset('uploads/cottages/'.$product->cottage_image)}}"alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product['name'] }}</h5>
                                    <h6>{{ $product['description'] }}</h6>
                                    <!-- Product price-->
                                  Php.  {{ $product['price'] }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a style="background-color: black; border-color: black; color: white " class="btn btn-outline-dark mt-auto" href="reservecottage/{{$product->id}}">Reserve</a></div>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>

                   <h3>Tree House</h3>
                
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($treehouse as $product)
                  

                    <div class="col mb-5">
                        <div class="card h-100"   style="background-color: #f8d9d9">
                            <div class="wrapper new"> <span class="premium"></span></div>

                            <!-- Product image-->
                            <img class="card-img-top "  style="width: 270px; height: 270px; padding: 10px" src="{{asset('uploads/treehouses/'.$product->treehouse_image)}}"alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product['name'] }}</h5>
                                    <h6>{{ $product['description'] }}</h6>
                                    <!-- Product price-->
                                   Php. {{ $product['price'] }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a   style="background-color: black; border-color: black; color: white " class="btn btn-outline-dark mt-auto" href="reservetreehouse/{{$product->id}}">Reserve</a></div>
                            </div>
                        </div>
                    </div>
            @endforeach



                 
                     
              
                </div>


    <strong> <h3> Function Hall</h3></strong>

                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($functionhall as $product)
                  

                    <div class="col mb-5">
                        <div class="card h-100"   style="background-color: #f8d9d9">
                        <!-- <div class="ribbon ribbon-top-right"><span>Available Function hall</span></div> -->
                            <div class="wrapper new"> <span class="premium"></span></div>

                            <!-- Product image-->
                            <img class="card-img-top" style="width: 270px; height: 270px; padding: 10px" src="{{asset('uploads/functionhalls/'.$product->functionhall_image)}}"alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product['name'] }}</h5>
                                    <h6>{{ $product['description'] }}</h6>
                                    <!-- Product price-->
                                  Php.  {{ $product['price'] }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a style="background-color: black; border-color: black; color: white " class="btn btn-outline-dark mt-auto" href="reservecottage/{{$product->id}}">Reserve</a></div>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>


    <h3>Pavillion Hall</h3>
                
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($pavillionhall as $product)
                  

                    <div class="col mb-5">
                        <div class="card h-100"   style="background-color: #f8d9d9">
                            <div class="wrapper new"> <span class="premium"></span></div>

                            <!-- Product image-->
                            <img class="card-img-top "  style="width: 270px; height: 270px; padding: 10px" src="{{asset('uploads/pavillionhalls/'.$product->pavillionhall_image)}}"alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product['name'] }}</h5>
                                    <h6>{{ $product['description'] }}</h6>
                                    <!-- Product price-->
                                   Php. {{ $product['price'] }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a   style="background-color: black; border-color: black; color: white "  class="btn btn-outline-dark mt-auto" href="/user/reservetreehouse/{{$product->id}}">Reserve</a></div>
                            </div>
                        </div>
                    </div>
            @endforeach



                 
                     
              
                </div>
            </div>
        </section>
@endsection