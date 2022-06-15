<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/user/user-template.css">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500;688&display=swap" rel="stylesheet">
<link rel="icon" href='/img/logotitle.png' type="image/icon type">

<script src="{{ asset('js/app.js') }}" defer></script>


</head>
<style>
    
</style>
<body>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
   <div class="header-drpdwn">
       <nav class="hdr">
       <h1><i>Calapan Recreational and Zoological Park</i></h1>
       <div class="hdr-btn">
        <div class="btn-name">
                <ul>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style='color:white;' href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <!-- <a class="dropdown-item" href="#">Another action</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                            </form>
                        </div>
                    </li>
                </ul>
        </div>
        <div class="socmedia-btn">
                <a href="https://www.facebook.com/Calapan-nature-PARK-2074177712886006/"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="mail-outline"></ion-icon></a> 
        </div>
       </div>
      
        <img class="logo" src="img/logo.png" alt="">
       </nav>
   </div>
   
   <div class = "cont-menu">
        <nav class="menu">
        <ul>
            <li><a href="#">PROGRAM & EVENTS <i class="material-icons" style="font-size:20px">arrow_drop_down</i></a>
                <!-- <ul>
                        <li><a href="#">SPECIAL EVENTS</a></li>
                        <li><a href="#">TEAM BUILDING RESERVATION</a></li>
                        <li><a href="#">Holidays Events</a></li>
                        <li><a href="#">WEATHER CANCELLATION</a></li>
                </ul> -->
            </li>
            <li><a href="#">PARKS & FACILITIES <i class="material-icons" style="font-size:20px">arrow_drop_down</i></a>
                <!-- <ul>
                        <li><a href="#">Cottages</a></li>
                        <li><a href="#">Function Halls</a></li>
                        <li><a href="#">Tree Houses</a></li>
                        <li><a href="#">Pavilion Hall</a></li>
                </ul> -->
            </li>
            <li><a href="#">GET INVOLVE</a></li>
            <li><a href="#">ABOUT US</a></li>
        </ul>
        </nav>
   </div>

   <div class="main-panel">
    @yield('content')
    </div>
<div class="footer">
    <h5>All Right Reserved Bulusan Park System 2022</h5>
</div>
</body>
</html>