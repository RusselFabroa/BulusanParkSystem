
<?php use App\Models\cottages; ?>

@extends('layouts.front.layout-action')
@section('style')
    <style>
        form{
            margin: 10px;
            padding: 5px;

        }
        form input[type=date]{
            border: 1px solid #424242;
            width: 200px;
            margin-top: 10px;
        }
        form input[type=text]{
            border: 1px solid #424242;
            margin-top: 10px;
        }
        form input[type=number]{
            border: 1px solid #424242;
            margin-top: 10px;
        }
        textarea{
            border: 1px solid #424242;
            margin-top: 10px;
        }
    </style>
@endsection
@section('content')
    <header class=" py-5" style="height: 50px;background-color: rgb(250, 135, 41);" >
        <div class="text-center text-light" style="position: relative;top: -2.3rem">
            <h2 class="display-3" style="font-size: 50px;">Reservation</h2>
        </div>
    </header>

    <main class="my-5">
        <div class="container">

            <!--Section: Content-->
            <section class="text-center">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div  class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img style="width: 100%;" src="{{asset('uploads/cottages/'.$cottages->cottage_image)}}" class="img-fluid" />

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$cottages->name}}</h5>
                                <p class="card-text">
                                    {{$cottages->description}}
                                </p>
                                <h5>Total price: 1000</h5>
                            </div>
                        </div>
                    </div>
                    <!--Card start-->
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <!--Body start-->
                                <h5 class="card-title">Fillup the Form!</h5>

                                <form method="post" action="{{route('user.save.CottagesReserve')}}"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden"  name="cottage_id" value="{{ $cottages->id }}">
                                    <input type="hidden" id="price"  name="price" value="{{ $cottages->price }}">
                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <label for="date" style="position: relative; left: -3rem;">Start Date:</label>
                                            <input  style="height: 40px;" class="form-control" name="date" id="date" placeholder="Date" type="date">
                                            <span style="font-size: 10px; margin-top: 0;" class="text-danger">@error('date'){{$message}}@enderror</span>
                                        </div>

                                        <div class="col-sm-5">
                                            <label for="enddate" style="position: relative; left: -3rem;">End Date:</label>
                                            <input style="height: 40px;" class="form-control" name="enddate" id="enddate" type="date" />
                                            <span style="font-size: 15px" class="text-danger">@error('enddate'){{$message}}@enderror</span>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col">
                                                <input style="height: 40px;" class="form-control" name="mobilenumber" id="mobilenumber" type="text" placeholder="{{$user->phone_number}}" value="{{$user->phone_number}}" readonly/>
                                                <span style="font-size: 15px" class="text-danger">@error('mobilenumber'){{$message}}@enderror</span>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col">

                                            <input style="height: 40px;" class="form-control" name="address" id="address" type="text" placeholder="Address" />
                                            <span style="font-size: 15px" class="text-danger">@error('address'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">

                                            <textarea class="form-control" name="note" id="note" type="text" placeholder="Note:"></textarea>
                                            <span style="font-size: 15px" class="text-danger">@error('note'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary btn-lg" type="submit">Reserve</button>
                                </form>
                                <!--Body start-->
                            </div>
                        </div>
                    </div>
                    <!-- End Card-->
                </div>
            </section>


        </div>
    </main>

@endsection
