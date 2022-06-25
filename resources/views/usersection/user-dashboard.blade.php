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

        .form-book{
            margin-left: 0;
        }
        .form-book input{
            margin: 5px;
        }

    </style>
    <br>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <button type="button" class="btn btn-primary position-relative" data-bs-target="#bookmodal" data-bs-toggle="modal" data-bs-dismiss="modal">BOOK NOW!
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{$countreserved}}
            <span class="visually-hidden">unread messages</span>
            </span>
        </button>
    </div>


    <section class="py-5">

        <div class="container px-4 px-lg-5 mt-5">
            <strong> <h3> Cottage</h3></strong>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($cottages as $product)


                    <div class="col mb-5">
                        <div class="card h-100"   style="background-color: #f8d9d9">
{{--                          <div class="ribbon ribbon-top-right"><span>Available Cottage</span></div> --}}
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
                                <div class="text-center"><a style="background-color: black; border-color: black; color: white " class="btn btn-outline-dark mt-auto" href="reservefunctionhall/{{$product->id}}">Reserve</a></div>
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
                                <div class="text-center"><a   style="background-color: black; border-color: black; color: white "  class="btn btn-outline-dark mt-auto" href="/user/reservepavillion/{{$product->id}}">Reserve</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        {{--Book MODALS--}}
        <div class="modal fade" id="bookmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
<!--Body Start-->
                            <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Book</h4>
                                                </div>
                                                <div class="card-body">
                                                   <div style="margin-left: 5px" class="book-form">
                                                       <form class="form-book">
                                                           <div class="row">
                                                               <div class="col">
                                                                   <input type="text" class="form-control" placeholder="Full Name">
                                                               </div>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col">
                                                                   <input type="text" class="form-control" placeholder="Email">
                                                               </div>
                                                               <div class="col">
                                                                   <input type="text" class="form-control" placeholder="Phone Number">
                                                               </div>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col">
                                                                   <label style="margin-left: 5px; margin-bottom: 0px;" for="start_date">Date</label>
                                                                   <input type="date" class="form-control" name="start_date" id="start_date" placeholder="First name">
                                                               </div>
                                                           </div>
                                                           <div class="row">

                                                               <div class="col">
                                                                   <label style="margin-left: 5px; margin-bottom: 0px;" for="adult">Adult</label>
                                                                   <input type="number" name="adult" class="form-control" placeholder="15 years old and above">
                                                               </div>
                                                               <div class="col">
                                                                   <label style="margin-left: 5px; margin-bottom: 0px;" for="child">Children</label>
                                                                   <input type="number" name="child" class="form-control" placeholder="14 years old and below">
                                                               </div>
                                                               <h5 style="font-size: 15px; color: #fd6060;">Reminder: Senior Citizen and Children(3 years old and below) are FREE!</h5>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col">
                                                                   <button style="width: 100%; margin-top: 10px" type="submit" class="btn btn-primary"> BOOK </button>
                                                               </div>
                                                           </div>
                                                       </form>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!--Card start-->
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Reserved Facilities</h4>
                                                </div>
                                                <div class="card-body">
                                                    <!--Body start-->
                                                            <div style="margin-left: 5px" class="form-reserved">
                                                                <table class="table table-striped table-bordered">
                                                                    <thead>

                                                                    <tr>

                                                                        <th>FACILITIES NAME</th>
                                                                        <th>IMAGE</th>
                                                                        <th>AMOUNT</th>
                                                                        <th>STATUS</th>
                                                                        <th></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($data as $reservedcottage)
                                                                        <tr>
                                                                            <td>{{$reservedcottage->name}}</td>
                                                                            <td></td>
                                                                            <td>{{$reservedcottage->amount}}</td>
                                                                            <td>
                                                                                <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                                                {{$reservedcottage->status}}
                                                                            </td>
                                                                            <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                                        </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><strong>Total:</strong></td>
                                                                        <td>{{$totalbill}}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                    <!--Body End-->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Card-->
                                    </div>
                            </div>

<!--Body End-->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{--END MODALS--}}



    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
