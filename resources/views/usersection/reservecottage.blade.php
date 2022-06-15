
<?php use App\Models\cottages; ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bulusan Part - Homepage</title>
        <!-- Favicon-->
    <link rel="stylesheet" href="{{ URL::asset('css/topbar.css') }}" />

        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url ('css/styles.css') }}" rel="stylesheet" />
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
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <!-- <a class="navbar-brand" href="#!">Bulusan Park</a> -->
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="" style="width: 50px">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/user/user-dashboard">Home</a></li><li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">History</a>
                            <i class="fas fa-power-off"></i>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/user/historyreserve">Cottage</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="/user/historyreservetreehouse">Tree house</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="/user/historyreservefunctionhall">Function hall</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="/user/historyreservepavillionhall">Pavilion hall</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Facilities</a>
                            <i class="fas fa-power-off"></i>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/user/cottage">Cottage</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="/user/treehouse">Tree house</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="/user/functionhall">Function hall</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="/user/pavilionhall">Pavilion hall</a></li>
                            </ul>
                        </li>
                    </ul>
                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                @endguest
                        <button class="btn btn-outline-dark" type="submit">
                            <!-- <i class="bi-cart-fill me-1"></i> -->
                            <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                        </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                            </form>
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                        </button>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <!-- <img class="logo" src="{{ asset('img/banner.jpg') }}" alt="" width="1500px"> -->

   <header class=" py-5" style="background-color: rgb(250, 135, 41); height: 100px" >


                <div class="text-center text-dark" style="position: relative;top: -2.3rem">
                    <h2 style="color: #ffffff" class="display-3 ">RESERVATION FOR COTTAGE</h2>
                </div>
        </header>

        <!-- Section-->
 <!-- @yield('content') -->


<!--  <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                   &lt;!&ndash; <strong> <h3> Cottage</h3></strong> &ndash;&gt;
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5" style="position: relative; top: -2rem">
                        <div class="card h-100"   style="background-color: #f8d9d9; width: 600px; position: relative; left: -10rem">
         &lt;!&ndash; Product image&ndash;&gt;
 <img class="card-img-top" style="width: 593px; padding: 10px; height: 400px" src="{{asset('uploads/cottages/'.$cottages->cottage_image)}}"alt="..." />
                            &lt;!&ndash; Product details&ndash;&gt;
                            <div class="card-body p-4">
                                <div class="text-center">
                                    &lt;!&ndash; Product name&ndash;&gt;
                                    <h5 class="fw-bolder">{{ $cottages->name }}</h5>
                                    <h6>{{ $cottages->description }}</h6>
                                    &lt;!&ndash; Product price&ndash;&gt;
                                  Php.  {{ $cottages->price }}
                                </div>

                <form method="post" action="{{route('save.CottagesReserve')}}"  enctype="multipart/form-data">
                @csrf

               <input type="hidden"  name="cottage_id" value="{{ $cottages->id }}">
               <input type="hidden" id="price"  name="price" value="{{ $cottages->price }}">
                    <label for="date" style="position: relative; left: -4rem;">Date:</label>
                    <input type="date" style="width: 400px; height: 34px" id="date" name="date" value=""><br><br>
                    <label for="date"  style="position: relative; left: -4rem">Mobile No:</label>
                    <input type="number"   style="width: 400px; height: 34px; position: relative; top: -30px; left: 42px" id="mobilenumber" name="mobilenumber" value="" required="">
                    <label for="address"  style="position: relative; left: -4rem">Address:</label>
                    <input type="text"  style="width: 400px; height: 34px; position: relative; top: -30px; left: 42px" id="address" name="address" value="" required=""><br><br>
                     <label for="note"  style="position: relative; left: -4rem; top: -60px">Note:</label>
                    <textarea rows="4" style="width: 400px; height: 65px; position: relative; top: -30px;" id="note" name="note" value=""></textarea><br><br>
                    <input type="submit" value="Submit">
            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

    <!--Main layout-->
        <!--Main layout-->
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
        <!--Main layout-->

   <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url ('js/scripts.js') }}"></script>
    </body>
</html>
