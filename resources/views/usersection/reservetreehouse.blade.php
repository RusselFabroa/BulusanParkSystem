
<?php use App\Models\treehouse; ?>

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


    <main class="my-5">
        <div class="container">

            <!--Section: Content-->
            <section class="text-center">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div  class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img style="width: 100%;" src="{{asset('uploads/treehouses/'.$treehouse->treehouse_image)}}" class="img-fluid" />

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $treehouse->name }}</h5>
                                <p class="card-text">
                                    {{ $treehouse->description }}
                                </p>
                                <h5>Price: Php{{ $treehouse->price }}</h5>
                            </div>
                        </div>
                    </div>
                    <!--Card start-->
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <!--Body start-->
                                <h5 class="card-title">Fillup the Form!</h5>

                                <form method="post" action="{{route('user.save.TreehousesReserve')}}"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden"  name="treehouse_id" value="{{ $treehouse->id }}">
                                    <input type="hidden" id="price"  name="price" value="{{ $treehouse->price }}">
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
                                            <input style="height: 40px;" class="form-control" name="mobilenumber" id="mobilenumber" type="number" placeholder="Number" />
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


