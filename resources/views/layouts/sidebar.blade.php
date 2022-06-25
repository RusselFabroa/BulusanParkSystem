

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulusan Park</title>

    <link rel="icon" href="{{ asset('/img/logotitle.png') }}"  type="image/icon type">
    <link rel="stylesheet" href="{{ url('css/sidebar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



</head>
<body>

        <div class="sidebar">
        <img class="logo" src="{{asset('img/logo.png')}}" alt="logo" style="z-index:1000">
                <div class="menu">
                    <div class="item"><a href="{{route('admin.home')}}"><i class="fas fa-bars"></i> Dashboard</a></div>
                    <div class="item">
                        <a class="sub-btn"><i class="fas fa-home"></i> Facilities<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="/admin/listcottages" class="sub-item">Cottages</a>
                            <a href="/admin/treehouselist" class="sub-item">Tree House</a>
                          <a href="/admin/functionhall-list" class="sub-item">Function Hall</a>
                            <a href="/admin/pavillionhall-list" class="sub-item">Pavillion Hall</a>
                        </div>
                    </div>
                    <div class="item" id="item1"><a href="/admin/activities-list"><i class="fa fa-futbol-o"></i> Activities</a></div>
                    <div class="item" id="item2"><a href="/admin/animals-list"><i class="fa fa-paw"></i> Animals</a></div>
                    <div class="item" id="item3"><a href="/admin/events-list"><i class="fa fa-calendar"></i> Events</a></div>
                    <div class="item" id="item3"><a href="/admin/slider-list"><i class="fa fa-file-photo-o"></i> Sliders</a></div>
                     <div class="item" id="item4">
                        <a class="sub-btn"><i class="fa fa-folder"></i> Inventory<i class="fas fa-angle-right dropdown"></i></a>

                        <div class="sub-menu">
                            <a href="/admin/inventorycottage" class="sub-item">Cottages</a>
                            <a href="/admin/inventorytreehouse" class="sub-item">Tree House</a>
                            <a href="/admin/inventoryfunctionhall" class="sub-item">Function Hall</a>
                            <a href="/admin/inventorypavillion" class="sub-item">Pavillion Hall</a>
                        </div>
                    </div>
                        <div class="item" id="item4">
                        <a class="sub-btn"><i class="fa fa-folder"></i> Sales<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                            <a href="/admin/salesCottage" class="sub-item">Cottages</a>
                            <a href="/admin/salesTreehouse" class="sub-item">Tree House</a>
                            <a href="/admin/salesFunctionhall" class="sub-item">Function Hall</a>
                            <a href="/admin/salesPavillionhall" class="sub-item">Pavillion Hall</a>
                        </div>
                    </div>
                    <div class="item" id="item5"><a href="{{route('admin.list.problem')}}"><i class="fa fa-exclamation-triangle"></i>Reports
                            <span class="badge bg-danger">{{$countproblem}}</span>
                        </a></div>
                    <div class="item" id="item4">
                        <a class="sub-btn"><i class="fa fa-address-book"></i>Users Management<i class="fas fa-angle-right dropdown"></i></a>

                        <div class="sub-menu">
                            <a href="" class="sub-item">Admin</a>
                            <a href="" style="font-size: 15px" class="sub-item">Verified Customer</a>
                        </div>
                    </div>

                    <div class="item" id="item5"><a href="#"><i class="fas fa-info-circle"></i> AboutUs</a></div>
                </div>
        </div>




<script type="text/javascript">
    $(document).ready(function(){
      $('.sub-btn').click(function(){
          $(this).next('.sub-menu').slideToggle();
          $(this).find('.dropdown').toggleClass('rotate');
      })
    });
</script>

{{--<div class="hdr">--}}
{{--    <h3>Calapan Recreational and Zoological Park</h3>--}}
{{--    <ul class="nav navbar-nav ms-auto">--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin</a>--}}
{{--            <div class="dropdown-menu dropdown-menu-end">--}}
{{--                <a href="#" class="dropdown-item">Reports</a>--}}
{{--                <a href="#" class="dropdown-item">Settings</a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="{{route('admin.logout')}}" class="dropdown-item" ONCLICK="event.preventDefault();document.getElementById('logout-form').submit();">LOGOUT</a>--}}
{{--                <form action="{{route('admin.logout')}}" id="logout-form" method="get"> </form>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}
<div class="header-title" style="position: fixed; width: 80%; top: 0px; z-index: 2;">
        <div class="m-8">
            <nav class="shadow p-1 navbar navbar-expand-sm navbar-light bg-light">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">Calapan Recreational and Zoological Park </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav ms-auto">



                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                                <div class="dropdown-menu dropdown-menu-end">
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
        </div>
</div>

<!-- mainpanellll -->

<div class="main-panel">
    @yield('content')
</div>

</body>
</html>
