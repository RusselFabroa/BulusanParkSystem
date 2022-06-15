
<?php use App\Models\pavillionhall; ?>

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
                    <h2 class="display-3 ">Reservation for Function Hall</h2>
                </div>
        </header>
     
        <!-- Section-->
 <!-- @yield('content') -->

    @if(Session::has('cottages_update'))
                 <div style="text-align: center;" class="alert alert-success" role="alert">
                 {{ Session::get('cottages_update') }}
                  <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
                <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
            <?php Session::forget('cottages_update'); ?>
        @endif
        @if(Session::has('cottages_delete'))
                 <div class="alert alert-danger" role="alert">
                 {{ Session::get('cottages_delete') }}
                <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
                <span aria-hidden="true">&times;</span>
                 </button>
                 </div>
            <?php Session::forget('cottages_delete'); ?>
        @endif  


  <section class="py-5">

            <div class="container px-4 px-lg-5 mt-5">
                   <!-- <strong> <h3> Cottage</h3></strong> -->

                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                  

                    <div class="col mb-5" style="position: relative; top: -2rem">
                        <div class="card h-100"   style="background-color: #f8d9d9; width: 600px; position: relative; left: -10rem">

                            <!-- Product image-->
 <img class="card-img-top" style="width: 593px; padding: 10px; height: 400px" src="{{asset('uploads/pavillionhalls/'.$pavillionhalls->pavillionhall_image)}}"alt="..." />

                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $pavillionhalls->name }}</h5>
                                    <h6>{{ $pavillionhalls->description }}</h6>
                                    <!-- Product price-->
                                  Php.  {{ $pavillionhalls->price }}
                                </div>
                                   <form method="post" action="{{route('save.Pavillion')}}"  enctype="multipart/form-data">
                @csrf

               <input type="hidden"  name="pavillionhalls_id" value="{{ $pavillionhalls->id }}">
               <input type="hidden" id="price"  name="price" value="{{ $pavillionhalls->price }}">

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
        </section>
    
   <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url ('js/scripts.js') }}"></script>
    </body>
</html>
