
@extends('layouts.admin.master')
@section('dashboard')
    class="active"
@endsection
@section('content')

<div class="card" id="card-content">
    <div class="card-header"></div>
    <div class="card-body">
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card  h-100 py-2 px-2">
                    <div class="card-body">
                        <div class="row  align-items-center">
                            <div class="col  ">
                                <div class="text-xs text-primary text-uppercase mb-1">
                                    Earnings (Monthly)</div>
                                <div class="h5 mb-0 text-gray-800">{{$monthtoday}} : ₱ {{$totalearnings}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 px-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs  text-success text-uppercase mb-1">
                                    Earnings (Annual)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">₱ {{$totalearnings}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pending Requests Card Example -->

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 px-2 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs text-warning text-uppercase mb-1">
                                    <a href="/admin/book-list" style="text-decoration: none">Unpaid Books</a></div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$unpaidbooks}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--NEW ROWWWWW-->

        <div class="col-xxl-4">
            <div class="row">
                <div class="col-xl-6 col-xxl-12">
                    <!-- Team members / people dashboard card example-->
                    <div class="card shadow mb-4">
                        <div class="card-header mb-4">Pending Reservation</div>
                        <div class="card-body">
                            <!-- Item 1-->
                            <div class="d-flex align-items-center justify-content-between mb-4">

                                <div class="d-flex align-items-center flex-shrink-0 me-3">

                                    <div style="margin-left: 20px;" class="d-flex flex-column fw-bold">
                                        <div  class="h5 mb-0 font-weight-bold text-gray-800">Cottage</div>
                                        <div class="small text-muted line-height-normal">pending reservation</div>
                                    </div>

                                </div>
                                <div class="text" style="margin-right: 30px;font-size: 30px;">
                                    <a href="/admin/inventorycottage" style="text-decoration: none;">{{$countCot}}</a>
                                </div>

                            </div>
                            <!-- Item 1-->
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center flex-shrink-0 me-3">
                                    <div style="margin-left: 20px;" class="d-flex flex-column fw-bold">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Tree House</div>
                                        <div class="small text-muted line-height-normal">pending reservation</div>
                                    </div>
                                </div>
                                <div class="text" style="margin-right: 30px;font-size: 30px;">
                                    <a href="/admin/inventorytreehouse" style="text-decoration: none;"> {{$countTre}}</a>
                                </div>
                            </div>
                            <!-- Item 1-->
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center flex-shrink-0 me-3">
                                    <div style="margin-left: 20px;" class="d-flex flex-column fw-bold">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Function Hall</div>
                                        <div class="small text-muted line-height-normal">pending reservation</div>
                                    </div>
                                </div>
                                <div class="text" style="margin-right: 30px;font-size: 30px;">
                                    <a href="/admin/inventoryfunctionhall" style="text-decoration: none;">{{$countFun}}</a>
                                </div>
                            </div>
                            <!-- Item 1-->
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="d-flex align-items-center flex-shrink-0 me-3">
                                    <div style="margin-left: 20px;" class="d-flex flex-column fw-bold">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Pavillion Hall</div>
                                        <div class="small text-muted line-height-normal">pending reservation</div>
                                    </div>
                                </div>
                                <div class="text" style="margin-right: 30px;font-size: 30px;">
                                    <a href="/admin/inventorypavillion" style="text-decoration: none;">{{$countPav}}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-12">
                    <!-- Project tracker card example-->
                    <div class="card card-header-actions mb-4">
                        <div class="card-header">
                            USERS

                        </div>
                        <div class="card-body">
                            <a href="/admin/manageuser-userlist" style="text-decoration: none">
                                <div class="col-xl-6 col-md-6 mb-7">
                                    <div class="card border-left-success shadow h-100 px-2 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Not Verified Users</div>
                                                </div>
                                                <div class="col-auto">
                                                    <h3>{{$totalnotverified}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/admin/manageuser-userlist" style="text-decoration: none">
                                <div class="col-xl-10 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 px-2 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Verified User</div>
                                                </div>
                                                <div class="col-auto">
                                                    <h3>{{$totalverifiedusers}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/admin/manageuser-list" style="text-decoration: none">
                                <div class="col-xl-12 col-md-6 mb-4" >
                                    <div class="card border-left-success shadow h-100 px-2 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2" >
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="text-decoration: none">
                                                        Registered Admin</div>
                                                </div>
                                                <div class="col-auto" >
                                                    <h3 style="text-decoration:none">{{$totaladmin}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Illustration dashboard card example-->

        </div>

        <div class="card card-header-actions mb-4 container-fluid">
            <div class="card-header">
                <h2>Report Chart</h2>
            </div>
            <div class="card-body px-0 antialiased">

                <div id="linechart" style="width: 1000px; height: 500px"></div>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    var chart_user = <?php echo $chart_users; ?>;
                    console.log(chart_user);
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(lineChart);
                    function lineChart() {
                        var data = google.visualization.arrayToDataTable(chart_user);
                        var options = {
                            title: 'Total Visitors by Age',
                            curveType: 'function',
                            legend: {
                                position: 'bottom'
                            }
                        };
                        var chart = new google.visualization.BarChart(document.getElementById('linechart'));
                        chart.draw(data, options);
                    }
                </script>




            </div>
        </div>

    </div>

</div>


@endsection




