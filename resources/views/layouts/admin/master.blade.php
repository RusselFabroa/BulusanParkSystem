<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" href="{{ asset('/img/logotitle.png') }}"  type="image/icon type">

    <title>
       Bulusan Park
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{--DataTable Jquery links--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>


<!--    -->
<style>
    .sidebar-wrapper ul li{
        font-size: 20px;
    }
    #card-content{
        padding-top: 20px;
        padding-left: 50px;
        padding-right: 50px;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
    }

</style>
@yield('style')
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo text-center">
            <a href="/admin/admindash" class="" >
                <img class="text-center" src="/img/logo.png" height="100px" alt="Logo">
            </a>
            <a href="" class="simple-text logo-normal text-center">
                Bulusan Park
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li @yield('dashboard')>
                    <a href="{{route('admin.home')}}">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li @yield('notifications')>
                    <a href="{{route('admin.list.problem')}}">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <p>Notifications
                            <span class="badge bg-danger">{{$countproblem}}</span>
                        </p>

                    </a>
                </li>
                <li @yield('events') >
                    <a href="/admin/events-list">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li @yield('inventory')>
                    <a href="/admin/inventorycottage">
                        <i class="now-ui-icons shopping_bag-16"></i>
                        <p>Request Reservation </p>
                    </a>
                </li>
                <li @yield('booking')>
                    <a href="/admin/book-list">
                        <i class="now-ui-icons location_bookmark"></i>
                        <p>Ticketing/Booking
                            <span class="badge bg-danger">{{ $countbook}}</span>
                        </p>
                    </a>
                </li>


                <li @yield('sales')>
                    <a href="/admin/salesfacilities">
                        <i class="now-ui-icons business_money-coins"></i>
                        <p>Inventory & Sales</p>
                    </a>
                </li>

                <li @yield('facilities')>
                    <a href="/admin/listcottages">
                        <i class="now-ui-icons business_bank"></i>
                        <p>Facilities</p>
                    </a>
                </li>
                <li @yield('activities')>
                    <a href="/admin/activity-list">
                        <i class="now-ui-icons sport_trophy"></i>
                        <p>Events & Activities</p>
                    </a>
                </li>
                <li @yield('animals')>
                    <a href="/admin/animals-list">
                        <i class="now-ui-icons emoticons_satisfied"></i>
                        <p >Animals</p>
                    </a>
                </li>

                <li @yield('sliders')>
                    <a href="/admin/slider-list">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Sliders</p>
                    </a>
                </li>

<!--                <li class="@yield('reports')">
                    <a href="./user.html">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>Reports</p>
                    </a>
                </li>-->

                <li class="@yield('users')">
                    <a href="/admin/manageuser-list">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>User Management</p>
                    </a>
                </li>
                <li class="@yield('settings')">
                    <a href="/admin/settings">
                        <i class="now-ui-icons ui-1_settings-gear-63"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li class="@yield('aboutus')">
                    <a href="/admin/aboutus-list">
                        <i class="now-ui-icons ui-2_favourite-28"></i>
                        <p>About Us</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent
         navbar-absolute" >
            <div class="container-fluid">
                <div class="navbar-wrapper" >
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand"  style="font-family:'Comic Sans MS'; margin-left:20px; font-size: 20px; color: #0b0b0b;"
                       href="/admin/admindash">Calapan Recreational and Zoological Park</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
<!--                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>-->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons location_world"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a href="#" class="dropdown-item">Reports</a>
                                <a href="#" class="dropdown-item">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{route('admin.logout')}}" class="dropdown-item" ONCLICK="event.preventDefault();document.getElementById('logout-form').submit();">LOGOUT</a>
                                <form action="{{route('admin.logout')}}" id="logout-form" method="get"> </form>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-sm " >

        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
                <div class="col-md-12">
                    <div class="card card-plain">
                           @yield('second-content')
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                               Calapan Nature Park @ Bulusan
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy; <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by <a href="#" target="_blank">IV-F5</a>. Coded By:<a href="https://www.facebook.com/johnrussel.fabroaii/" target="_blank"> Fabroa et al.</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
{{--<script src="../assets/js/core/jquery.min.js"></script>--}}
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
{{--<!--  Google Maps Plugin    -->--}}
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
{{--<!-- Chart JS -->--}}
<script src="../assets/js/plugins/chartjs.min.js"></script>
{{--<!--  Notifications Plugin    -->--}}
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
{{--<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->--}}
<script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>


@yield('scripts')
</body>


</html>
