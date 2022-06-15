<!DOCTYPE html>
<head>
    <link rel="icon" href='/img/logotitle.png' type="image/icon type">
    <title>Bulusan Park</title>

    <link rel="stylesheet" href="css/dashmain-style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500;688&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
        .modal-dialog {
            max-width: 90%;

        }

        .modal-body {
        max-height:600px;
        overflow-y: auto;
        }
        .card-text{
            height:150px;
            overflow-y: auto;
        }

</style>
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
                    <li><a type="button"type="button" class="" data-bs-target="#cottagesmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Cottages</a></li>
                    <li><a type="button"type="button" class="" data-bs-target="#treehousesmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Tree Houses</a></li>
                    <li><a type="button"type="button" class="" data-bs-target="#functionhallsmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Function Halls</a></li>
                    <li><a type="button"type="button" class="" data-bs-target="#pavillionhallsmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Pavilion Hall</a></li>
                </ul>
            </li>
            <li><a href="#">GET INVOLVE</a></li>
            <li><a type="button"type="button" class="" data-bs-target="#aboutusmodal" data-bs-toggle="modal" data-bs-dismiss="modal">ABOUT US</a></li>
        </ul>
    </nav>

</div>

<div class="slider-container">
    @include('layouts.slider')
</div>


<div class="second-menu">
    <nav class="second-menu-select">
        <ul>
            <li class="cr">
                <button id="calendar-btn">
                <span>CALENDAR</span>
                <span><ion-icon name="calendar-outline"></ion-icon></span>
                </button>
            </li>
            <li class="mp">
                <button id="map-btn">
                    <span>MAP</span>
                    <span><ion-icon name="map-outline"></ion-icon></span>
                </button>

            </li>
            <li class="pb">
                <button id="book-btn">
                <span>PLAY BOOK</span>
                <span><ion-icon name="create-outline"></ion-icon></span>
                </button>
            </li>
            <li class="ro">
                <form method="get" action="{{route('user.register')}}">
                <button id="reg-btn"  >
                <span>REGISTER ONLINE</span>
                <span><ion-icon name="receipt-outline"></ion-icon></span>
                </button>
                </form>
            </li>
            <li class="jot">
                <button type="button"type="button" class="" data-bs-target="#animalsmodal" data-bs-toggle="modal" data-bs-dismiss="modal">
                <span>List of Animals</span>
                <span><ion-icon name="bug-outline"></ion-icon></span>
                </button>
            </li>
        </ul>

    </nav>


</div>


<div class="map-container" id="map-div" style="width: 100%; display: none;" >

    <img class="map1-image" src="{{ asset('img/map2.jpg') }}" alt="description of myimage">
        <a href="https://goo.gl/maps/TdoYgqZioQi5TkMk6">
            <img class="map2-image" href="https://goo.gl/maps/TdoYgqZioQi5TkMk6" src="{{ asset('img/map3.jpg') }}" alt="description of myimage">
        </a>
    <button class="close-btn" id="close-btn">
        <ion-icon name="close-circle-outline"></ion-icon>
    </button>

</div>

<div class="calendar-container" id="calendar-div" style="width: 100%; display: none;" >


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<script type="text/javascript">
    $('#map-btn').click(
        function(){
            $('#map-div').show();
            $('#calendar-div').hide();
        }
    );
    $('#calendar-btn').click(
        function(){
            $('#calendar-div').show();
            $('#map-div').hide();
        }
    );
    $('#close-btn').click(
        function(){
            $('#calendar-div').hide();
            $('#map-div').hide();
        }
    );
</script>


<!-- Core theme JS-->
<script src="{{asset ('js/scripts.js') }}"></script>
<script src="/js/bootstrap.min.js'"></script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Footer -->




@include('modals-homepage')
</body>
@include('layouts.footer')
</html>
