
@extends('layouts.front.layout')

@section('content')

    <section class="py-5">

            <div class="container px-4 px-lg-5 mt-5">
                   <!-- <strong> <h3> Cottage</h3></strong> -->

                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($cottages as $product)
                  

                    <div class="col mb-5">
                        <div class="card h-100"   style="background-color: #f8d9d9">

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
                                <div class="text-center"><a style="background-color: black; border-color: black; color: white " class="btn btn-outline-dark mt-auto" href="/user/reservecottage/{{$product->id}}">Reserve</a></div>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>

       


   

          
            </div>
        </section>
@endsection