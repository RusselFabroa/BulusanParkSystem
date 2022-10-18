<!DOCTYPE html>
<head>
    <link rel="icon" href='/img/logotitle.png' type="image/icon type">
    <title>Bulusan Park</title>

    <link rel="stylesheet" href="css/maindashboard.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link  href="{{asset('assets/frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/owl.theme.default.min.css')}} " rel="stylesheet" >

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

        .toast-container {
            position: fixed;
            right: 20px;
            bottom: 10px;
            z-index: 100;
            z-index: 100;
            background-color: #fa6b6b;
        }

        .toast:not(.showing):not(.show) {
            display: none !important;
        }
</style>
</head>

<body>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<ul class="nav justify-content-end" id="hdr" >
    <li class="nav-item center justify-content-center">
        <div class="container-fluid">
            <h6  class="nav-link me-3 " href="#" style="color: #ffffff; font-family: 'MV Boli'; font-size:20px; font-weight: normal; ">{{$info->name}}</h6>

        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link px-1" style="color: #fdfcfc; font-size: 25px;" href="https://www.facebook.com/Calapan-nature-PARK-2074177712886006/"><ion-icon name="logo-facebook"></ion-icon></a>
    </li>
    <li class="nav-item">
        <a class="nav-link px-1" style="color: #ffffff;font-size: 25px;" href="#"><ion-icon name="logo-instagram"></ion-icon></a>
    </li>
    <li class="nav-item">
        <a class="nav-link px-1" style="color: #ffffff;font-size: 25px;" href="#"><ion-icon name="mail-outline"></ion-icon></a>
    </li>
    <li class="nav-item" style="z-index: 10;">
        <a href="{{route('user.register')}}" class="ro-btn">Register Online</a>
    </li>
    <li class="nav-item" style="z-index: 10;">
        <a href="{{route('user.login')}}" class="ro-btn">Login</a>
    </li>
</ul>


<!--<nav class="navbar shadow-lg navbar-light" style="background-color: #e47b04; max-height: 40px; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;" >
    <div class="container-fluid">
        <a class="navbar-brand pt-0" href="" >
                <img src="/img/logo.png" alt="" width="40"  class=" align-text-top">
        </a>
        <div class="pill-nav" id="top-nav" >
            <a href="#contact" class="ro-btn">Register Online</a>
            <a href="#about" class="ro-btn">Login</a>
        </div>
    </div>
</nav>-->
<nav class="navbar navbar-expand-lg navbar-white bg-white " style="margin-top:0px; min-height: 130px;">
    <div class="container-fluid">
        <a href="">
            <img class="logo" src="img/logo.png"  alt="Logo" width="200" style="z-index: 5; ">
        </a>

        {{--        <a class="navbar-brand" href="#">Navbar</a>--}}
        <button class="navbar-toggler" style="color: #2a5788" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon d-flex me-5">
                <H4>MENU</H4>
                <i class="fas fa-bars" style="color:#332828; font-size:28px;"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav" >

            <ul class="navbar-nav mx-auto ">
                <li class="nav-item" >
                    <a class="nav-link" aria-current="page" href="#">PROGRAM & EVENTS</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PARKS & FACILITIES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a type="button"type="button" class="dropdown-item" data-bs-target="#cottagesmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Cottages</a></li>
                        <li><a type="button"type="button" class="dropdown-item" data-bs-target="#treehousesmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Tree Houses</a></li>
                        <li><a type="button"type="button" class="dropdown-item" data-bs-target="#functionhallsmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Function Halls</a></li>
                        <li><a type="button"type="button" class="dropdown-item" data-bs-target="#pavillionhallsmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Pavilion Hall</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GET INVOLVE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" type="button"type="button" class="" data-bs-target="#aboutusmodal" data-bs-toggle="modal" data-bs-dismiss="modal">ABOUT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="slider-container">
    @include('layouts.slider')
</div>

<div class="container-fluid" id="sec-menu">
    <div class="row bg-primary" style="min-height: 100px; ">
        <div class="col-lg-3">
            <a class="btn btn-primary center" style="height: 100px;width:100%"
               data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <span><ion-icon name="calendar-outline"></ion-icon></span>
                MAP
            </a>
        </div>
        <div class="col-lg-3">
            <a class="btn btn-primary text-center"style="height: 100px;width:100%"
               data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">RESERVED FACILITIES</a>
        </div>
        <div class="col-lg-3">
            <a class="btn btn-primary text-center"style="height: 100px;width:100%"
               data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">PLAY BOOK</a>
        </div>
        <div class="col-lg-3">
            <a class="btn btn-primary text-center" style="height: 100px;width:100%"
               data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                LIST OF ANIMALS
            </a>
        </div>

    </div>
</div>


<div class="row">
    <div class="collapse multi-collapse my-1" id="multiCollapseExample1">
        <div class="card" style="width: 100%;max-height: 500px" >
            <div class="card-header">
                <h5 class="text-center" style="font-family: Rockwell"> Map/Location</h5>
            </div>
            <div class="card-body">
                <a  href="https://goo.gl/maps/TdoYgqZioQi5TkMk6" style="display:flex ">
                    <img class="img-responsive me-2" src="{{ asset('img/map3.jpg') }}" alt="description of myimage" style="max-height:400px; width: 70%">
                    <img class="map1-image" src="{{ asset('img/map2.jpg') }}" alt="description of myimage" style="max-height:400px; width: 30%">
                </a>
            </div>
        </div>
    </div>
</div>
<!--UPCOMING EVENTS-->
    <div class="row bg-light p-4" style="min-height: 500px">
        <div class="col-md-8">
            <h2 class="pull-left" style="color: #1f501f">UPCOMING EVENTS</h2>
            <section id="gallery">
                <div class="container">
                    <div class="row">
                        @foreach($activities as $activity)
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="{{asset('uploads/activities/'.$activity->image)}}"alt="Event poster" style="height: 150px; width: 250px;" class="card-img-top img-responsive">
                                <div class="top-left"
                                     style="color: white; font-weight: bold ; position: absolute;top: 0px;left: 16px; background-color: mediumseagreen; padding: 7px;">
                                    {{ Carbon\Carbon::parse($activity->start)->format('M d') }}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #f55252; font-weight: bold" >{{$activity->name}}</h5>
                                    <p class="card-text">{{$activity->description}}</p>
                                    <a href="" class="btn btn-outline-success btn-sm">Read More</a>
<!--                                    <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>-->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-4">
            <h2 class="pull-left" style="color: #1f501f">Animals you may see here:</h2>
            <div class="owl-carousel facility-carousel owl-theme">
                @foreach($animals as $animal)
                    <div class="item py-5" >
                        <div class="card">
                            <div class="card-img-top">
                                <img class="img-responsive"
                                     style="height: 130px; width: 130px; border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;"
                                     src="{{asset('uploads/animals/'.$animal->animals_image)}}"
                                     alt="product image ">
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <h6 class="text-center">{{$animal->species}} </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>








<!--

<div class="container-fluid">
    <div class="row" style=" padding: 10px;">
        <div class="col-md-7">
            <div class="card m-1 ms-3 mt-5" style="min-height: 400px; box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;" >
                <div class="card-header">
                    <h4 class="card-title text-center">Calendar</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card m-1 me-3 mt-5" style="min-height: 400px; box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                <div class="card-header">
                    <h4 class="card-title text-center">Animal you may see here:</h4>
                </div>
                <div class="card-body">
                    <div class="owl-carousel facility-carousel owl-theme">
                        @foreach($animals as $animal)
                            <div class="item py-5" >
                                <div class="img-responsive">
                                    <img class="rounded-circle"
                                         style="height: 150px; width: 150px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;"
                                         src="{{asset('uploads/animals/'.$animal->animals_image)}}"
                                         alt="product image ">
                                </div>
                                <h6 class="text-center">{{$animal->species}} </h6>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<!--<div class="toast-container">
    <div class="toast fade show bg-warning" id="myToast">
        <div class="toast-header">
            <strong class="me-auto"><i class="bi-gift-fill"></i>Big Events? <br> For Inquiries: Just call/text</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-center">
            <p>0923213213/092342234</p>

&lt;!&ndash;            <a type="button" class="btn btn-warning ms-3 " aria-current="page" data-bs-target="#reviewmodal" data-bs-toggle="modal" data-bs-dismiss="modal">Please Rate Us</a>&ndash;&gt;
        </div>
    </div>
</div>-->



<div class="review-cont">
<div class="container bg-white" style="padding: 10px; width:100%;">
    <div id="reviews" class="review-section">
        <div class="d-flex align-items-center justify-content-between ">
            <h4 class="m-0">{{$reviewcount}} Reviews</h4>
            <select class="custom-select custom-select-sm border-0 shadow-sm ml-2 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                <option data-select2-id="3">Most Relevant</option>
                <option>Most Recent</option>
            </select>
            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 188px;">
                <span class="selection">
                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-qd66-container">
                        <span class="select2-selection__rendered" id="select2-qd66-container" role="textbox" aria-readonly="true" title="Most Relevant">Comments/Feedback</span>
                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                    </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span>
            </span>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="stars-counters">
                    <tbody>
                    <tr class="">
                        <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5 Stars</button>
                                </span>
                        </td>
                        <td class="progress-bar-container">
                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                <div class="fit-progressbar-background">
                                    <span class="progress-fill" style="width: {{$fivepercentage}}%;"></span>
                                </div>
                                ({{$fivestar}})
                            </div>
                        </td>
                        <td class="star-num">{{$fivepercentage}}%</td>
                    </tr>
                    <tr class="">
                        <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">4 Stars</button>
                                </span>
                        </td>
                        <td class="progress-bar-container">
                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                <div class="fit-progressbar-background">
                                    <span class="progress-fill" style="width: {{$fourpercentage}}%;"></span>
                                </div>
                                ({{$fourstar}})
                            </div>
                        </td>
                        <td class="star-num"> {{$fourpercentage}}%</td>
                    </tr>
                    <tr class="">
                        <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">3 Stars</button>
                                </span>
                        </td>
                        <td class="progress-bar-container">
                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                <div class="fit-progressbar-background">
                                    <span class="progress-fill" style="width: {{$threepercentage}}%;"></span>
                                </div>
                                ({{$threestar}})
                            </div>
                        </td>
                        <td class="star-num">{{$threepercentage}}%</td>
                    </tr>
                    <tr class="">
                        <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">2 Stars</button>
                                </span>
                        </td>
                        <td class="progress-bar-container">
                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                <div class="fit-progressbar-background">
                                    <span class="progress-fill" style="width: {{$twopercentage}}%;"></span>
                                </div>
                                ({{$twostar}})
                            </div>
                        </td>
                        <td class="star-num">  {{$twopercentage}}% </td>
                    </tr>
                    <tr class="">
                        <td>
                                <span>
                                    <button class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">1 Stars</button>
                                </span>
                        </td>
                        <td class="progress-bar-container">
                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                <div class="fit-progressbar-background">
                                    <span class="progress-fill" style="width: {{$onepercentage}}%;" ></span>
                                </div>
                                ({{$onestar}})
                            </div>
                        </td>
                        <td class="star-num"> {{$onepercentage}}%</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6" style="text-align: left;max-height: 30vh;overflow-y: auto; padding-top: 20px;">
                <div class="ranking">
                    <div class="review-list">
                        @foreach($reviewinfo as $reviewinfos)
                        <ul>
                            <li>
                                <div class="d-flex">
                                    <div class="left">

                        <span>
                            <img src="{{ asset('assets/img/default-avatar.png') }}" class="profile-pict-img img-fluid" alt="" />
                        </span>
                                    </div>
                                    <div class="right">
                                        <h4>
                                            {{$reviewinfos->user->name}}
                                            <span class="gig-rating text-body-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                    <path
                                        fill="currentColor"
                                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                                    ></path>
                                </svg>
                                {{$reviewinfos->rating}}
                            </span>
                                        </h4>
                                        <div class="country d-flex align-items-center">
                            <span>
                                <img class="country-flag img-fluid" src="https://bootdey.com/img/Content/avatar/avatar6.png" />
                            </span>
                                            <div class="country-name font-accent">{{$reviewinfos->user->address}}</div>
                                        </div>
                                        <div class="review-description">
                                            <p style="color: #0b0b0b">
                                                {{$reviewinfos->comment}}
                                            </p>
                                        </div>
                                        <span class="publish py-3 d-inline-block w-100">Published {{\Carbon\Carbon::parse($reviewinfos->created_at)->format('d M')}} </span>
                                        <hr>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        @endforeach
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>

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
                items:3
            }
        }
    })
</script>
<!-- Modal script-->
<script type="text/javascript">
    $(document).ready(function(){

        $('body').on('click','#show-details'),function (){
                var cottageURL = $(this).data('url');
                $.get(cottageURL, function (data){
                    $('#cottageShowModal').modal('show');
                })
        }}
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
