
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/user/user-dashboard">Home</a></li>
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
                    <h2 class="display-3 ">History</h2>
                </div>
        </header>
     
        <!-- Section-->
 <!-- @yield('content') -->

   


  <section class="py-5" style="padding: 130px;">
<h4>Reserve Pavilllion Hall Details #0000{{ $cottages['id']}}
           
    <a class="btn btn-success" style="float: right;" href="{{ url('user/historyreservepavillionhall') }}">My reservation</a></h4>
<br>
<br>

        <table class="table table-striped table-bordered">
                <tr>
                    <th>Pavillionhall image</th>
                    <th>Reservation date created</th>
                    <th>Reservation date</th>
                    <th>My number</th>
                    <th>My address</th>
                    <th>RESERVE STATUS</th>
                </tr>
                    <tr>
                        <td>
                           <img src="{{asset('uploads/pavillionhalls/'.$cottages['pavillionhall']['pavillionhall_image'])}}" width="70px" height="70px" alt="Image">
                        </td>
                        <td>{{ $cottages['created_at']}}</td>
                        <td>{{ $cottages['reserve_date']}}</td>
                        <td>{{ $cottages['mobilenumber']}}</td>
                        <td>{{ $cottages['address']}}</td>
                        <td>{{ $cottages['status']}}</td>
                       
                    </tr>
            </table>


        </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url ('js/scripts.js') }}"></script>
    </body>
</html>
