<?php use App\Models\cottages; ?>

@extends('layouts.front.layout')

@section('style')
    <style>
        body{

        }

    </style>
    @endsection


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
            font-size: 10px;
            text-align: center;
            line-height: 53px;
            top: -25px;
            left: -15px;
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

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);*/
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }
            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }  }
        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
        .invoice-box.rtl table {
            text-align: right;
        }
        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;

        }
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }

        .toast-container {
            position: fixed;
            right: 20px;
            top: 50px;
            z-index: 4;
        }

        .toast:not(.showing):not(.show) {
            display: none !important;
        }


    </style>

    <br>


    @if($statusbook == 1)
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <button style="width: 600px; height: max-content;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;" type="button" class="btn btn-info position-relative" data-bs-target="#checkbookmodal" data-bs-toggle="modal" data-bs-dismiss="modal">
                “You're in our sight now!”<br> Click for the next step and some details!
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{$countreserved}}
            <span class="visually-hidden">unread messages</span>
            </span>
            </button>
        </div>
        @include('usersection.modals')

    @elseif($statusbook == 2)
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <button style="width: 600px; height: max-content;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;" type="button" class="btn btn-success position-relative" data-bs-target="#confirmbookmodal" data-bs-toggle="modal" data-bs-dismiss="modal">
                    TRANSACTION COMPLETED<br>
                    You're ready to Go! We're expecting your presence!

                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{$countreserved}}
            <span class="visually-hidden">unread messages</span>
            </span>
                </button>
            </div>
            @include('usersection.modals')

    @else
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <button type="button" style="width: 600px; border-radius: 10px;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;" class="btn btn-primary btn-rounded position-relative" data-bs-target="#bookmodal" data-bs-toggle="modal" data-bs-dismiss="modal" >
                BOOK NOW!
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{$countreserved}}
            <span class="visually-hidden">unread messages</span>
            </span>
            </button>

        </div>
    @endif



    <div class="toast-container">
        <div class="toast fade show" id="myToast">
            <div class="toast-header">
                <strong class="me-auto"><i class="bi-gift-fill"></i> We'd welcome your feedback/review!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body text-center">
                <h6 class="text-center" style="font-size: 13px;">Thank you for visiting our website.You have been selected to participate in a brief customer or visitors satisfaction survey to let us know
                    how we can improve your experience.</h6>
                <a type="button" class="btn btn-warning ms-3 " aria-current="page" data-bs-target="#reviewmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Please Rate Us</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="reviewmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title-centered" id="staticBackdropLabel">Rate our service</h5>
                    <button style="height: 10px" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{--CARDS--}}
                @if($statusreview == 1)
                        <div class="container-md">
                            <form style="margin-left: 0" class="form-container" method="post" action="{{route('user.update.review')}}"  enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <div class="col">
                                        <h4 style="color: black">Name: {{$reviewinfo->user->name}}</h4>
                                        <label for="image" class="form-label">You have done rating: {{$reviewinfo->rating}} stars</label>

                                        <div class="rating">
                                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                        </div>
                                    </div>
                                </div>
<hr>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="comment" class="form-label">Comments</label>
                                        <textarea class="form-control" name="comment" id="comment" type="text" placeholder="">{{$reviewinfo->comment}}</textarea>
                                        <span style="font-size: 15px" class="text-danger">@error('note'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <br>
                                <button style="width: 100%" class="btn btn-warning" type="submit">Update</button>

                            </form>
                        </div>
                    @else
                        <div class="container-md">
                            <form style="margin-left: 0" class="form-container" method="post" action="{{route('user.save.review')}}"  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col">

                                        <label for="image" class="form-label">Your rating</label>
                                        <div class="rating">
                                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col">
                                        <label for="comment" class="form-label">Comments</label>
                                        <textarea class="form-control" name="comment" id="comment" type="text" placeholder=""></textarea>
                                        <span style="font-size: 15px" class="text-danger">@error('note'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <br>
                                <button style="width: 100%" class="btn btn-primary" type="submit">Submit</button>

                            </form>
                        </div>
                @endif
                    {{--END CARDS--}}
                </div>

            </div>
        </div>
    </div>




    <div class="mx-4 py-4" >
        <div class="container-fluid">

            <div class="card mx-4">
                <div class="card-header">
                    <div class="text-center">
                        <strong> <h3> Cottage</h3></strong>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 " style="background-color: rgba(229,227,227,0.39)" >
                            <div class="owl-carousel facility-carousel owl-theme">
                                @foreach($cottages as $product)
                                    <div class="item">
                                        <div class="card h-100 m-2 " style="background-color: rgba(248,217,217,0.2)">
                                            <div class="wrapper new"> <span class="premium"></span></div>
                                            <img class="card-img-top img-responsive p-1" style="border-radius: 3px;" src="{{asset('uploads/cottages/'.$product->cottage_image)}}" alt="product image ">
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <!-- Product name-->
                                                    <h5 class="fw-bolder">{{$product->name }}</h5>
                                                    <hr>
                                                    <small>{{$product->description}}</small>

                                                    <!-- Product price-->
                                                    <h6>Price: Php. {{ $product->price }}</h6>
                                                </div>
                                            </div>

                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a   style="background-color: black; border-color: black; color: white " class="btn btn-outline-dark mt-auto" href="reservecottage/{{$product->id}}">Reserve</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=" mx-4 py-2">
        <div class="container-fluid">

            <div class="card mx-4">
                <div class="card-header">
                    <div class="text-center">
                        <strong> <h3> Tree House</h3></strong>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 " style="background-color: rgba(229,227,227,0.39)">
                            <div class="owl-carousel facility-carousel owl-theme">
                                @foreach($treehouse as $product)
                                    <div class="item">
                                        <div class="card h-100 m-2 " style="background-color: rgba(248,217,217,0.2)">
                                            <div class="wrapper new"> <span class="premium"></span></div>
                                            <img class="card-img-top img-responsive p-1" style="border-radius: 3px;" src="{{asset('uploads/treehouses/'.$product->treehouse_image)}}" alt="product image ">
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <!-- Product name-->
                                                    <h5 class="fw-bolder">{{$product->name }}</h5>
                                                    <hr>
                                                    <small>{{$product->description}}</small>

                                                    <!-- Product price-->
                                                    <h6>Price: Php. {{ $product->price }}</h6>
                                                </div>
                                            </div>

                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a   style="background-color: black; border-color: black; color: white " class="btn btn-outline-dark mt-auto" href="reservetreehouse/{{$product->id}}">Reserve</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div class=" mx-4 py-2">
        <div class="container-fluid">



            <div class="card mx-4">
                <div class="card-header">
                    <div class="text-center">
                        <strong> <h3> Function Hall</h3></strong>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 " style="background-color: rgba(229,227,227,0.39)">
                            <div class="owl-carousel facility-carousel owl-theme">
                                @foreach($functionhall as $product)
                                    <div class="item">
                                        <div class="card h-100 m-2 " style="background-color: rgba(248,217,217,0.2)">
                                            <div class="wrapper new"> <span class="premium"></span></div>
                                            <img class="card-img-top img-responsive p-1" style="border-radius: 3px;" src="{{asset('uploads/functionhalls/'.$product->functionhall_image)}}" alt="product image ">
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <!-- Product name-->
                                                    <h5 class="fw-bolder">{{$product->name }}</h5>
                                                    <hr>
                                                    <small>{{$product->description}}</small>

                                                    <!-- Product price-->
                                                    <h6>Price: Php. {{ $product->price }}</h6>
                                                </div>
                                            </div>

                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a   style="background-color: black; border-color: black; color: white " class="btn btn-outline-dark mt-auto" href="reservefunctionhall/{{$product->id}}">Reserve</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class=" mx-4 py-2">
        <div class="container-fluid">

            <div class="card mx-4">
                <div class="card-header">

                    <div class="text-center">
                        <strong> <h3> Pavillion Hall</h3></strong>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12 " style="background-color: rgba(229,227,227,0.39)">
                            <div class="owl-carousel facility-carousel owl-theme">
                                @foreach($pavillionhall as $product)
                                    <div class="item">
                                        <div class="card h-100 m-2 " style="background-color: rgba(248,217,217,0.2)">
                                            <div class="wrapper new"> <span class="premium"></span></div>
                                            <img class="card-img-top img-responsive p-1" style="border-radius: 3px;" src="{{asset('uploads/pavillionhalls/'.$product->pavillionhall_image)}}" alt="product image ">
                                            <div class="card-body p-4">
                                                <div class="text-center">
                                                    <!-- Product name-->
                                                    <h5 class="fw-bolder">{{$product->name }}</h5>
                                                    <hr>
                                                    <small>{{$product->description}}</small>

                                                    <!-- Product price-->
                                                    <h6>Price: Php. {{ $product->price }}</h6>
                                                </div>
                                            </div>

                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                                <div class="text-center"><a   style="background-color: black; border-color: black; color: white " class="btn btn-outline-dark mt-auto" href="reservepavillion/{{$product->id}}">Reserve</a></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </div>

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
                                            <form class="form-book" action="{{route('user.save.book')}}" method="post" enctype="multipart/form-data">
                                                @csrf

                                                @foreach($auth_info as $auth_infos)
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="fullname" placeholder="{{$auth_infos->name}}" value="{{$auth_infos->name}}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="email" placeholder="{{$auth_infos->email}}" value="{{$auth_infos->email}}" readonly>
                                                        </div>

                                                        <div class="col">
                                                            <input type="text" name="number" class="form-control" placeholder="Phone Number">
                                                            <span style="font-size: 15px" class="text-danger">@error('number'){{$message}}@enderror</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="row">
                                                    <div class="col">
                                                        <label style="margin-left: 5px; margin-bottom: 0px;" for="book_date">Date</label>
                                                        <input type="date" class="form-control" name="book_date" id="book_date" placeholder="First name">
                                                        <span style="font-size: 15px" class="text-danger">@error('date'){{$message}}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col">
                                                        <label style="margin-left: 5px; margin-bottom: 0px;" for="adult">No. of Adult</label>
                                                        <input type="number" name="no_of_adults" class="form-control" placeholder="15 years old and above">
                                                        <span style="font-size: 15px" class="text-danger">@error('adult'){{$message}}@enderror</span>
                                                    </div>
                                                    <div class="col">
                                                        <label style="margin-left: 5px; margin-bottom: 0px;" for="child">No. of Children</label>
                                                        <input type="number" name="no_of_children" class="form-control" placeholder="14 years old and below">
                                                        <span style="font-size: 15px" class="text-danger">@error('children'){{$message}}@enderror</span>
                                                    </div>
                                                    <h5 style="font-size:15px; color:#fd6060;"> Reminder: Senior Citizen and Children(3 years old and below) are FREE!</h5>
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

                                                    <th>AMOUNT</th>
                                                    <th>STATUS</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($reservedcottage as $reservedcottages)
                                                    <tr>

                                                        <td>{{$reservedcottages->name}}</td>

                                                        <td>{{$reservedcottages->amount}}</td>
                                                        <td>
                                                            <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                            Accepted
                                                        </td>
                                                        <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                    </tr>
                                                @endforeach

                                                @foreach($reservedtreehouse as $reservedtreehouses)
                                                    <tr>

                                                        <td>{{$reservedtreehouses->name}}</td>

                                                        <td>{{$reservedtreehouses->amount}}</td>
                                                        <td>
                                                            @if($reservedtreehouses->status == 'available')
                                                                <span><i class="bi bi-check-circle-fill"></i></span>
                                                                Accepted
                                                            @else
                                                                <span><i class="bi bi-check-circle-fill"></i></span>
                                                                Accepted
                                                            @endif
                                                        </td>
                                                        <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                    </tr>
                                                @endforeach
                                                @foreach($reservedfunction as $reservedfunctions)
                                                    <tr>

                                                        <td>{{$reservedfunctions->name}}</td>

                                                        <td>{{$reservedfunctions->amount}}</td>
                                                        <td>
                                                            <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                            Accepted
                                                        </td>
                                                        <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                    </tr>
                                                @endforeach
                                                @foreach($reservedpavillion as $reservedpavillions)
                                                    <tr>

                                                        <td>{{$reservedpavillions->name}}</td>

                                                        <td>{{$reservedpavillions->amount}}</td>
                                                        <td>
                                                            <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                            Accepted
                                                        </td>
                                                        <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                    </tr>
                                                @endforeach
                                                <tr>

                                                    <td><strong>Total:</strong></td>
                                                    <td><span>&#8369;</span>{{$totalfacilitiesbill}}</td>
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

    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/ jquery-3.6.1.min.js')}}"></script>

    <script>
        $('.facility-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            dots:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
    @yield('script')
@endsection
