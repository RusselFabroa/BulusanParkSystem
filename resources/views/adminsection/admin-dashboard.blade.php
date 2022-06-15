<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulusan Park</title>

    <link rel="icon" href='/img/logotitle.png' type="image/icon type">
    <link rel="stylesheet" href="/css/adm-dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
           #cottages {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                        }

            #cottages td, #cottages th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #cottages th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
}

#edit-btn{
    color: white;
    width: 20px;
    background-color:  #3366ff;
    border-radius: 5px ;
    padding: 7px;
    margin:2px;
}
#del-btn{
    color: white;
    background-color:   #ff3333;
    border-radius: 5px ;
    padding: 7px;
    margin:2px;
}
    </style>
</head>
<body>


        <div class="sidebar">
        <img class="logo" src="/img/logo.png" alt="">
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
                            <a href="" class="sub-item">Function Hall</a>
                            <a href="" class="sub-item">Pavillion Hall</a>
                        </div>
                    </div>
                    <div class="item" id="item5"><a href="#"><i class="fa fa-exclamation-triangle"></i>Reports
                            <span class="badge bg-secondary">{{$countProb}}</span>
                        </a></div>
                    <div class="item" id="item5"><a href="#"><i class="fas fa-info-circle"></i> AboutUs</a></div>
                </div>
        </div>







<!-- mainpanellll -->
<div class="panel-header">
            @include('layouts.header')
</div>
<div class="main-panel">

    <div class="panel-content">
{{--        <h1 id="greet">Have a great day!</h1>--}}

{{--USER CONTENT--}}
    <div class="message-content" style="padding: 20px">
        <div class="container-sm">
            <div class="card-header">
                <h4 class="text-center">USERS</h4>
            </div>
            <div class="card-body" style="display: flex">
                <div class="container px-4">
                    <div class="row gx-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-header"><strong>Verified User</strong></div>

                                <div class="card-body">{{$totalverifiedusers}}</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header"><strong>Verified Admin</strong></div>
                                <div class="card-body">{{$totaladmin}}</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-header"><strong>Pending User</strong></div>
                                <div class="card-body">{{$totalnotverified}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--   END USER     --}}

        {{--chart CONTENT--}}
        <div class="message-content" style="padding: 20px">
            <div class="container-sm">
                <div class="card-header">
                    <h4 class="text-center">Pending Reservations</h4>
                </div>
                <div class="card-body" style="display: flex">
                    <div class="container px-4">
                        <div class="row gx-5">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Cottages</th>
                                                <th>Tree House</th>
                                                <th>Function Hall</th>
                                                <th>Pavilion Hall</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><strong><a href="/admin/inventorycottage">{{$countCot}}</a></strong></td>
                                                <td><strong><a href="/admin/inventorytreehouse">{{$countTre}}</a></strong></td>
                                                <td><strong><a href="/admin/inventoryfunctionhall">{{$countFun}}</a></strong></td>
                                                <td><strong><a href="/admin/inventorypavillion">{{$countPav}}</a></strong></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--   END charts     --}}

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
</body>
</html>
