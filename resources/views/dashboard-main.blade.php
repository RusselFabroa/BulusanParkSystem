<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/dashmain-style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500;688&display=swap" rel="stylesheet">
    <link rel="icon" href='/img/logotitle.png' type="image/icon type">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>



</head>

<body>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<div class="header-drpdwn">
    <nav class="hdr">
        <h1><i>Calapan Recreational and Zoological Park</i></h1>
        <div class="hdr-btn">
            <div class="btn-online">
                <ul>
                    <li><a class="ro-btn" href="{{route('user.register')}}">Register Online</a></li>
                    <li><a class="cust-btn" href="{{route('user.login')}}">Customer</a></li>
                    <li><a class="admn-btn"href="{{route('admin.login')}}">Admin</a></li>

                </ul>
            </div>
            <div class="socmedia-btn">
                <a href="https://www.facebook.com/Calapan-nature-PARK-2074177712886006/"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="#"><ion-icon name="mail-outline"></ion-icon></a>
            </div>
        </div>

        <img class="logo" src="img/logo.png"  alt="Logo">
    </nav>
</div>

<div class = "cont-menu">
    <nav class="menu" >
        <ul>
            <li><a href="#">PROGRAM & EVENTS <i class="material-icons" style="font-size:20px">arrow_drop_down</i></a>
                <ul>
                    <li><a href="#">SPECIAL EVENTS</a></li>
                    <li><a href="#">TEAM BUILDING RESERVATION</a></li>
                    <li><a href="#">Holidays Events</a></li>
                    <li><a href="#">WEATHER CANCELLATION</a></li>
                </ul>
            </li>
            <li><a href="#">PARKS & FACILITIES <i class="material-icons" style="font-size:20px">arrow_drop_down</i></a>
                <ul>
                    <li><a href="#">Cottages</a></li>
                    <li><a href="#">Function Halls</a></li>
                    <li><a href="#">Tree Houses</a></li>
                    <li><a href="#">Pavilion Hall</a></li>
                </ul>
            </li>
            <li><a href="#">GET INVOLVE</a></li>
            <li><a href="#">ABOUT US</a></li>
        </ul>
    </nav>
</div>

<div class="slider-container">
    @include('layouts.slider')
</div>

<!-- IMAGE DISPLAYYYYYYYYY -->


<!--
<div class="img-container">


                    <div class="img-display">
                            <img src="img/animaldsply.jpg" alt="">
                    </div>
                    <div class="img-menu">

                     <nav class="img-select">
                     <ul>
                        <li><a href="#">Animals Viewing</a></li>
                        <li><a href="#">Trails</a></li>
                        <li><a href="#">Instagramable Spot</a></li>
                        <li><a href="#">Clean Environment</a></li>
                        <li><a href="#">Point Renovation</a></li>
                     </ul>
                     </nav>

                    </div>
    </div>
-->
<!-- SECOND MENUUUUUUUUUUUU -->

<div class="second-menu">
    <nav class="second-menu-select">
        <ul>
            <li class="cr">
                <span><a href="#">CALENDAR</a></span>
                <span><ion-icon name="calendar-outline"></ion-icon></span>
            </li>
            <li class="mp">
                <a href="#" onclick="mapFunction()">MAP</a></span>
                <span><ion-icon name="map-outline"></ion-icon></span>
            </li>
            <li class="pb">
                <span><a href="#">PLAY BOOK</a></span>
                <span><ion-icon name="create-outline"></ion-icon></span>
            </li>
            <li class="ro">
                <span><a href="#">REGISTER ONLINE</a></span>
                <span><ion-icon name="receipt-outline"></ion-icon></span>
            </li>
            <li class="jot">
                <span><a href="#">List of Animals</a></span>
                <span><ion-icon name="bug-outline"></ion-icon></span>
            </li>
        </ul>

    </nav>


</div>
<div class="map-container" id="map-div">

    <img class="map1-image" src="{{ asset('img/map2.jpg') }}" alt="description of myimage">
    <p><a href="https://goo.gl/maps/TdoYgqZioQi5TkMk6">
            <img class="map2-image" href="https://goo.gl/maps/TdoYgqZioQi5TkMk6" src="{{ asset('img/map3.jpg') }}" alt="description of myimage">
        </a></p>
</div>

<!-- Scripts for Toggle-->
<script>
    function mapFunction(){
        var x = document.getElementById("map-div")
        if(x.style.display === "none"){
            x.style.display = "flex";
        }
        else{
            x.style.display = "none";
        }
    }

</script>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Footer -->
<a href="{{route('logout')}}">Logout</a>
</body>
@include('layouts.footer')
</html>
