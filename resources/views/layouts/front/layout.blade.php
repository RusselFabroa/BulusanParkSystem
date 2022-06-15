<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bulusan Park - Homepage</title>
        <!-- Favicon-->
    <link rel="stylesheet" href="{{ URL::asset('css/topbar.css') }}" />

        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url ('css/styles.css') }}" rel="stylesheet" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/user/user-dashboard" >Home</a></li>
                         <li class="nav-item dropdown">
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
                        <!-- <li class="nav-item"><a class="nav-link" href="/historyreserve">History</a></li> -->
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
                        <li class="nav-item"><a type="button" style="color: #9f5b5b" class="nav-link active" aria-current="page" data-bs-target="#problemmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Report Problem</a></li>
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
                            <a href="{{route('user.logout')}}" class="dropdown-item" ONCLICK="event.preventDefault();document.getElementById('logout-form').submit();">LOGOUT</a>
                            <form action="{{route('user.logout')}}" id="logout-form" method="get"> </form>
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                        </button>
                </div>
            </div>
        </nav>

        @if ($message = Session::get('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif



        <!-- Header-->
@include('layouts.front.header')

        <!-- Section-->
 @yield('content')

        <!-- Footer-->
@include('layouts.front.footer')



        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url ('js/scripts.js') }}"></script>


        {{--ANIMALS MODALS--}}
        <div class="modal fade" id="problemmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title-centered" id="staticBackdropLabel">What Can I Do For You?</h5>
                        <button style="height: 10px" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{--CARDS--}}
                        @include('flash-message')
                            <div class="container-md">
                                <form style="margin-left: 0" class="form-container" method="post" action="{{route('user.save.problem')}}"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col">
                                            <input style="height: 40px;" class="form-control" name="mobilenumber" id="mobilenumber" type="number" placeholder="Number" />
                                            <span style="font-size: 15px" class="text-danger">@error('mobilenumber'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">

                                            <select style="height: 40px;" class="form-control" name="problem" id="problem" type="text" >
                                                <option id="problem" name="problem" value="Lost Item">Lost Item</option>
                                                <option id="problem" name="problem" value="Other">Other</option>
                                            </select>
                                            <span style="font-size: 15px" class="text-danger">@error('problem'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">

                                            <textarea class="form-control" name="note" id="note" type="text" placeholder="Describe or Specify the Problem"></textarea>
                                            <span style="font-size: 15px" class="text-danger">@error('note'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <br>
                                    <button style="width: 100%" class="btn btn-primary" type="submit">Report</button>

                                </form>
                            </div>

                        {{--END CARDS--}}
                    </div>

                </div>
            </div>
        </div>
        {{--END MODALS--}}


    </body>
</html>
